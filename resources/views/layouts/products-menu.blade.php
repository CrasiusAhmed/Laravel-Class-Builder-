@auth
    <div class="header">
        <div class="logo-image">
            <img src="/images/laravel.png" alt="">
        </div>

        <div class="menu">
            @if (@isset($product))
                <button type="submit" class="btn2">Update Product</button>
            @else
                <button type="submit" class="btn2">Create Product</button>
            @endif
        </div>
    </div>
@endauth