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

    @if (Auth::id() == $product->user_id)
        <div class="header">
            <div class="logo-image">
                <img src="/images/laravel.png" alt="">
            </div>


            <div class="menu">
                <a href="{{ route('dashboard') }}" class="none-media">
                    <ion-icon class="f-s-25" name="person-outline"></ion-icon>
                </a>

                <div class="style-customer none-media">
                    <img src="/images/color-adjust-icon.png" alt="">
                </div>

                <form action="{{ route('products.edit', $product->id) }}">
                    @csrf

                    <button type="submit" class="btn2">Edit Product</button>
                </form>

                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn2">Delete Product</button>
                </form>
                
                <form id="save-classes-form" action="{{ route('product.storeClass', $product->id) }}" method="POST" class="none-media">
                    @csrf
                    <input type="hidden" name="title_class1" id="title-class1-input">
                    <input type="hidden" name="title_class2" id="title-class2-input">
                    <input type="hidden" name="description_class1" id="description-class1-input">
                    <input type="hidden" name="description_class2" id="description-class2-input">
                    <input type="hidden" name="description_class3" id="description-class3-input">
                    <input type="hidden" name="img_class1" id="img-class1-input">
                    <input type="hidden" name="img_class2" id="img-class2-input">
                    <button class="btn2" id="save-classes" type="submit">Save Classes</button>
                </form>

            </div>
        </div>


        <script>
            var isOwner = true;
        </script>
    @else
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

        <script>
            var isOwner = false;
        </script>
    @endif

@endauth
