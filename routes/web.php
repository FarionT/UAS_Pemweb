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

Route::prefix('admin')->group(function () {
    Route::get('/account', function() {
        $users = User::all()->where('role_id', 2);
        return view('admin.confirm', ['users' => $users]);
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
            'email' => $user->email,
            'notelp' => $user->notelp,
            'company' => $user->company,
            'country' => $user->country,
            'city' => $user->city,
            'address' => $user->address,
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
Route::get('/orders/approve/{id}', function($id) {
    $order = Order::findOrFail($id);
    $order->accept = 1;
    $order->save();
    $orders = Order::all();
    return view('orders.index', ['orders' => $orders]);
});

Route::get('/orders/{id}/search', function($id) {
    $orders = Order::all()->where('user_id', $id);
    return view('orders.search', ['orders' => $orders]);
})->middleware('auth');;

Route::get('/orders/mail/{user_id}/{order_id}', function($user_id, $order_id) {
    $user = User::find($user_id);
    $order = Order::find($order_id);
    $mailData = [
        'subject' => 'Order Shipping',
        'username' => $user->username,
        'firstname' => $user->firstname,
        'lastname' => $user->lastname,
        'email' => $user->email,
        'notelp' => $user->notelp,
        'company' => $user->company,
        'country' => $user->country,
        'city' => $user->city,
        'address' => $user->address,
        'npwp' => $user->npwp,
        'nib' => $user->nib,
        'shippercompany' => $order->shippercompany,
        'cosigncompany' => $order->cosigncompany
    ];

    //INI KIRIM KE EMAIL CS
    Mail::to('axel.ferdinand@student.umn.ac.id')->send(new OrderMail($mailData));
    Storage::disk('local')->delete('temp/pdf_file.pdf');
    return redirect('/');
});


Route::get('/register/mail/{id}', function($id) {
    $user = User::find($id);
    $mailData = [
        'subject' => 'Registrasi Account',
        'username' => $user->username,
        'firstname' => $user->firstname,
        'lastname' => $user->lastname,
        'email' => $user->email,
        'notelp' => $user->notelp,
        'company' => $user->company,
        'country' => $user->country,
        'city' => $user->city,
        'address' => $user->address,
        'npwp' => $user->npwp,
        'nib' => $user->nib
    ];

    //INI KIRIM KE EMAIL CS
    Mail::to('axel.ferdinand@student.umn.ac.id')->send(new RegisterMail($mailData));
    return redirect('/');
});
