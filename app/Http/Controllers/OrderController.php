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
            // return view('tampilan.forbidden');
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
            'si_no' => 'required',
            'shipper' => 'required|max:255',
            'consignee' => 'required|max:255',
            'notifyparty' => 'required|max:255',
            'party' => 'required|max:255',
            'qty' => 'required',
            'stuffing_date' => 'required|date',
            'pol' => 'required',
            'pod' => 'required',
            'vsl' => 'required',
            'etd_jkt' => 'required|date',
            'marking' => 'required',
            'description' => 'required|max:255',
            'gw' => 'required|numeric',
            'nw' => 'required|numeric',
            'meas' => 'required|numeric'
        ]);

        $order = new Order();
        $order->type_id = $request->type_id;
        $order->pickup_add = $request->pickup_add;
        $order->delivery_add = $request->delivery_add;
        $order->si_no = $request->si_no;
        $order->order_date = $request->order_date;
        $order->bc_no = $request->bc_no;
        $order->to = $request->to;
        $order->attn = $request->attn;
        $order->shipper = $request->shipper;
        $order->consignee = $request->consignee;
        $order->notifyparty = $request->notifyparty;
        $order->party = $request->party;
        $order->qty = $request->qty;
        $order->cont = $request->cont;
        $order->seal_no = $request->seal_no;
        $order->tare_weight = $request->tare_weight;
        $order->stuffing_date = $request->stuffing_date;
        $order->pol = $request->pol;
        $order->pod = $request->pod;
        $order->vsl = $request->vsl;
        $order->etd_jkt = $request->etd_jkt;
        $order->eta_sin = $request->eta_sin;
        $order->m_vsl = $request->m_vsl;
        $order->etd_sin = $request->etd_sin;
        $order->eta_lax = $request->eta_lax;
        $order->eta_chi = $request->eta_chi;
        $order->kpbc = $request->kpbc;
        $order->peb = $request->peb;
        $order->req_date = $request->req_date;
        $order->marking = $request->marking;
        $order->description = $request->description;
        $order->gw = $request->gw;
        $order->nw = $request->nw;
        $order->meas = $request->meas;
        $order->notes = $request->notes;
        $order->shipping_ref = $request->shipping_ref;
        $order->hbl_num = $request->hbl_num;
        $order->scac_code = $request->scac_code;
        $order->place_of_receipt = $request->place_of_receipt;
        $order->port_of_loading = $request->port_of_loading;
        $order->port_of_discharge = $request->port_of_discharge;
        $order->place_of_delivery = $request->place_of_delivery;
        $order->bl_form = $request->bl_form;
        $order->place_of_issue = $request->place_of_issue;
        $order->freight = $request->freight;
        $order->container_seal_no = $request->container_seal_no;
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
        $order->type_id = $request->type_id;
        $order->pickup_add = $request->pickup_add;
        $order->delivery_add = $request->delivery_add;
        $order->si_no = $request->si_no;
        $order->order_date = $request->order_date;
        $order->bc_no = $request->bc_no;
        $order->to = $request->to;
        $order->attn = $request->attn;
        $order->shipper = $request->shipper;
        $order->consignee = $request->consignee;
        $order->notifyparty = $request->notifyparty;
        $order->party = $request->party;
        $order->qty = $request->qty;
        $order->cont = $request->cont;
        $order->seal_no = $request->seal_no;
        $order->tare_weight = $request->tare_weight;
        $order->stuffing_date = $request->stuffing_date;
        $order->pol = $request->pol;
        $order->pod = $request->pod;
        $order->vsl = $request->vsl;
        $order->etd_jkt = $request->etd_jkt;
        $order->eta_sin = $request->eta_sin;
        $order->m_vsl = $request->m_vsl;
        $order->etd_sin = $request->etd_sin;
        $order->eta_lax = $request->eta_lax;
        $order->eta_chi = $request->eta_chi;
        $order->kpbc = $request->kpbc;
        $order->peb = $request->peb;
        $order->req_date = $request->req_date;
        $order->marking = $request->marking;
        $order->description = $request->description;
        $order->gw = $request->gw;
        $order->nw = $request->nw;
        $order->meas = $request->meas;
        $order->notes = $request->notes;
        $order->shipping_ref = $request->shipping_ref;
        $order->hbl_num = $request->hbl_num;
        $order->scac_code = $request->scac_code;
        $order->place_of_receipt = $request->place_of_receipt;
        $order->port_of_loading = $request->port_of_loading;
        $order->port_of_discharge = $request->port_of_discharge;
        $order->place_of_delivery = $request->place_of_delivery;
        $order->bl_form = $request->bl_form;
        $order->place_of_issue = $request->place_of_issue;
        $order->freight = $request->freight;
        $order->container_seal_no = $request->container_seal_no;
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
