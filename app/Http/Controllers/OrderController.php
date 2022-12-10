<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;
use App\Models\User;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('see-all-order')) {
            abort('403');
        }

        $orders = Order::all();
        return view('orders.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Gate::allows('create-order')) {
            abort('403');
        }
        
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'shippercompany' => 'required|max:100',
            'shipperaddress' => 'required|max:255',
            'cosigncompany' => 'required|max:100',
            'cosignaddress' => 'required|max:255'
        ]);

        $order = new Order();
        $order->shippercompany = $request->shippercompany;
        $order->shipperaddress = $request->shipperaddress;
        $order->cosigncompany = $request->cosigncompany;
        $order->cosignaddress = $request->cosignaddress;
        $order->user_id = $request->user()->id;
        $order->user_id = Auth::id();
        $order->save();

        ini_set('max_execution_time', 6000);
        $data = Order::findOrFail($order->id);
        view()->share('order', $data);
        $pdf = PDF::loadView('template', compact('data'));

        // $pdf->output()->storeAs('temp', 'pdf_file.pdf');
        
        Storage::disk('local')->put('temp/pdf_file.pdf', $pdf->output());

        return redirect('/orders/mail/'.$order->user_id.'/'.$order->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $user = User::findOrFail($order->user_id);
        return view('orders.show', ['order' => $order, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        if(!Gate::allows('update-status-order', $order)) {
            return "Order sudah di approve";
        }

        // if(!Gate::allows('update-belongs-order', $order)) {
        //     abort('403');
        // }
        
        return view('orders.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->shippercompany = $request->shippercompany;
        $order->shipperaddress = $request->shipperaddress;
        $order->cosigncompany = $request->cosigncompany;
        $order->cosignaddress = $request->cosignaddress;
        $order->save();
        // return redirect('{{ url()->previous() }}');
        return redirect('/orders/'.$order->user_id.'/search');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('delete-order')) {
            abort('403');
        }

        $order = Order::find($id);
        $order->delete();
        return redirect('/orders');
    }
}
