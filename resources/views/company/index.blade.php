<h1>INI HALAMAN INDEX YA GES</h1>
<header styel="display: flex;">
    <a href="/">HomePage</a>
    <a href="/aboutus">About Us</a>
    <a href="/service">Service</a>
    <a href="/visi&misi">Vision & Mission</a>
    @auth
        @if (Auth::user()->role_id == 1)
            <a href="/admin/account">Confirm Account</a>
        @endif
    @endauth
</header>
<br />

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> -->
            <a href="/profile">
                {{ __('Profile') }}
            </a>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="route('logout')"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
            <h2>Halo Tuan Muda, {{Auth::user()->firstname}} {{Auth::user()->lastname}} </h2>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a><br />

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
<br />
@auth
    @if (Auth::user()->accept == 0)
        <p>Maaf bang akun anda belum di konfirmasi</p>
    @endif
@endauth

<a href="/orders/create">Order Shipping</a><br />

@auth
    @if (Auth::user()->role_id == 1)
        <a href="/orders">View All Order</a>
    @endif
@endauth