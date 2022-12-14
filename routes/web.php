<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Order;

use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Mail\ApproveMail;
use App\Mail\OrderMail;
use App\Mail\AppOrderMail;
use App\Mail\EditOrderMail;
use App\Mail\CancelOrderMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('company.index');
});

Route::get('/aboutus', function () {
    return view('company.aboutus');
});

Route::get('/visi&misi', function () {
    return view('company.visimisi');
});

Route::get('/service', function () {
    return view('company.service');
});

Route::get('/change/language/{id}/{type_id}', function($id, $type_id) {
    $user = User::findOrFail($id);
    $user->language = $type_id;
    $user->save();
    return view('company.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/account', function() {
        $users = User::all()->where('role_id', 2);
        return view('admin.confirm', ['users' => $users]);
    });

    Route::get('/detail/{id}', function($id) {
        $user = User::findOrFail($id);
        $orders = Order::all()->where('user_id', $user->id);
        return view('admin.detail', ['user' => $user, 'orders' => $orders]);
    });
    
    Route::get('/approve/{id}', function($id) {
        $user = User::findOrFail($id);
        $user->accept = 1;
        $user->save();
        // $users = User::all()->where('role_id', 2);
        // return view('admin.confirm', ['users' => $users]);
        return redirect('/admin/approve/mail/'.$user->id);
    });

    Route::get('/approve/mail/{id}', function($id) {
        $user = User::find($id);
        $mailData = [
            'subject' => 'Approvement Account',
            'username' => $user->username,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'company' => $user->company,
            'email' => $user->email,
            'emailcompany' => $user->emailcompany,
            'notelp' => $user->notelp,
            'npwp' => $user->npwp,
            'nib' => $user->nib
        ];
    
        //INI KIRIM KE PEMBUAT ACCOUNT
        Mail::to($user->email)->send(new ApproveMail($mailData));

        $users = User::all()->where('role_id', 2);
        return view('admin.confirm', ['users' => $users]);
    });
});

Route::resource('orders', OrderController::class)->middleware('auth');
Route::get('/orders/create/{user_id}/{id}', function($user_id, $id) {
    // if(!Gate::allows('create-order')) {
    //     return view('company.accountapprove');
    //     // abort('403');
    // }
    $user = User::find($user_id);
    if($user->accept === 0) {
        return view('company.accountapprove');
    }
    $order = Order::orderBy('id', 'desc')->first();
    $type_id = $id;
    return view('orders.create', ['type_id' => $type_id, 'order' => $order]);
});
Route::get('/orders/approve/{id}', function($id) {
    $order = Order::findOrFail($id);
    $order->accept = 1;
    $order->save();
    $orders = Order::all();
    // return view('orders.index', ['orders' => $orders]);
    return redirect('/orders/approve/mail/'.$order->id);
});

Route::get('/orders/approve/mail/{id}', function($id) {
    $order = Order::find($id);
    $user = User::find($order->user_id);
    $mailData = [
        'subject' => 'Approvement Order',
        'username' => $user->username,
        'firstname' => $user->firstname,
        'lastname' => $user->lastname,
        'company' => $user->company,
        'email' => $user->email,
        'emailcompany' => $user->emailcompany,
        'notelp' => $user->notelp,
        'npwp' => $user->npwp,
        'nib' => $user->nib,
        'order_id' => $order->id,
        'type_id' => $order->type_id,
        'created_at' => $order->created_at,
        'shipper' => $order->shipper,
        'consignee' => $order->consignee
    ];

    //INI KIRIM KE PEMBUAT ACCOUNT
    Mail::to($user->email)->send(new AppOrderMail($mailData));
    $orders = Order::all();
    return view('orders.index', ['orders' => $orders]);
});

Route::get('/orders/cancel/mail/{id}', function($id) {
    $order = Order::find($id);
    $user = User::find($order->user_id);
    $mailData = [
        'subject' => 'Cancel Order',
        'username' => $user->username,
        'firstname' => $user->firstname,
        'lastname' => $user->lastname,
        'company' => $user->company,
        'email' => $user->email,
        'emailcompany' => $user->emailcompany,
        'notelp' => $user->notelp,
        'npwp' => $user->npwp,
        'nib' => $user->nib,
        'order_id' => $order->id,
        'type_id' => $order->type_id,
        'created_at' => $order->created_at,
        'shipper' => $order->shipper,
        'consignee' => $order->consignee
    ];
    $order->delete();

    //INI KIRIM KE CS
    Mail::to('axel.ferdinand@student.umn.ac.id')->send(new CancelOrderMail($mailData));
    return redirect('/profile');
});

Route::get('/orders/{id}/search', function($id) {
    $orders = Order::all()->where('user_id', $id);
    return view('orders.search', ['orders' => $orders]);
})->middleware('auth');

Route::get('/orders/mail/{user_id}/{order_id}', function($user_id, $order_id) {
    $user = User::find($user_id);
    $order = Order::find($order_id);
    $mailData = [
        'subject' => 'Order Shipping',
        'username' => $user->username,
        'firstname' => $user->firstname,
        'lastname' => $user->lastname,
        'company' => $user->company,
        'email' => $user->email,
        'emailcompany' => $user->emailcompany,
        'notelp' => $user->notelp,
        'npwp' => $user->npwp,
        'nib' => $user->nib,
        'order_id' => $order->id,
        'type_id' => $order->type_id,
        'created_at' => $order->created_at,
        'shipper' => $order->shipper,
        'consignee' => $order->consignee
    ];

    //INI KIRIM KE EMAIL CS
    Mail::to('axel.ferdinand@student.umn.ac.id')->send(new OrderMail($mailData));
    Storage::disk('local')->delete('temp/pdf_file.pdf');
    return redirect('/');
});

Route::get('/orders/edit/mail/{user_id}/{order_id}', function($user_id, $order_id) {
    $user = User::find($user_id);
    $order = Order::find($order_id);
    $mailData = [
        'subject' => 'Edit Order Shipping',
        'username' => $user->username,
        'firstname' => $user->firstname,
        'lastname' => $user->lastname,
        'company' => $user->company,
        'email' => $user->email,
        'emailcompany' => $user->emailcompany,
        'notelp' => $user->notelp,      
        'npwp' => $user->npwp,
        'nib' => $user->nib,
        'order_id' => $order->id,
        'type_id' => $order->type_id,
        'created_at' => $order->created_at,
        'shipper' => $order->shipper,
        'consignee' => $order->consignee
    ];

    //INI KIRIM KE EMAIL CS
    Mail::to('axel.ferdinand@student.umn.ac.id')->send(new EditOrderMail($mailData));
    Storage::disk('local')->delete('temp/pdf_file.pdf');
    return redirect('/profile');
});

Route::get('/privacy', function() {
    return view('auth.privacy');
});

Route::get('/register/mail/{id}', function($id) {
    $user = User::find($id);
    $mailData = [
        'subject' => 'Registrasi Account',
        'username' => $user->username,
        'firstname' => $user->firstname,
        'lastname' => $user->lastname,
        'company' => $user->company,
        'email' => $user->email,
        'emailcompany' => $user->emailcompany,
        'notelp' => $user->notelp,
        'npwp' => $user->npwp,
        'nib' => $user->nib
    ];

    //INI KIRIM KE EMAIL CS
    Mail::to('axel.ferdinand@student.umn.ac.id')->send(new RegisterMail($mailData));
    return redirect('/');
});





// TAMPILAN
Route::get('/tampilan/index', function() {
    return view('tampilan.index');
});

Route::get('/tampilan/aboutus', function() {
    return view('tampilan.aboutus');
});

Route::get('/tampilan/expimpform', function() {
    return view('tampilan.expimpform');
});

Route::get('/tampilan/service', function() {
    return view('tampilan.service');
});

Route::get('/tampilan/login', function() {
    return view('tampilan.login');
});

Route::get('/tampilan/register1', function() {
    return view('tampilan.register1');
});

Route::get('/tampilan/register2', function() {
    return view('tampilan.register2');
});

Route::get('/tampilan/visimisi', function() {
    return view('tampilan.visimisi');
});

Route::get('/tampilan/home', function() {
    return view('tampilan.home');
});

Route::get('/tampilan/forbidden', function() {
    return view('tampilan.forbidden');
});

Route::get('/tampilan/profile', function() {
    return view('tampilan.profile');
});

Route::get('/tampilan/home', function() {
    return view('tampilan.home');
});

Route::get('/tampilan/detailuser', function() {
    return view('tampilan.detailuser');
});

Route::get('/tampilan/home2', function(){
    return view('tampilan.home2');
});