
@guest
    
<div class="header">
    <div class="logo">
        <h1>LaravelBuilder</h1>
    </div>

    <div class="menu">
        <a href="{{ route('login') }}">Sell</a>
        <a href="{{ route('login') }}">Buy</a>
        <a href="{{ route('register') }}" class="btn1">Get Started</a>
    </div>
</div>

@endguest

@auth
<div class="header">
    <div class="logo">
        <h1>LaravelBuilder</h1>
    </div>

    <div class="menu">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('products.create') }}">Build</a>
        <a href="{{ route('dashboard') }}" class="btn1" style="padding: 8px">
            <ion-icon class="f-s-25" name="person-outline"></ion-icon>
        </a>
    </div>
</div>
@endauth