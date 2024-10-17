<style>
    h1,
    p,
    img {
        border: 1.5px solid transparent;
    }

    .selected {
        border: 1.5px solid #ff2121;
        position: relative;
    }

    .hovering {
        border: 1.5px solid #218cff;
        position: relative;
    }
</style>


@include('layouts.custom')
<div class="hero3">
    @include('layouts.products-style-menu')

    @if (session('success'))
        <div class="laravel-message2 animate-opacity">
            <div class="image-message">
                <img src="/images/exlamtion.png" alt="">
            </div>

            <div class="flex-col">
                <h1 class="m-b-10">Success</h1>
                <p>{{ session('success') }}</p>
            </div>
        </div>
    @endif


    @if ($errors->any())
        <div class="laravel-message2 animate-opacity">
            <div class="image-message">
                <img src="/images/exlamtion.png" alt="">
            </div>

            <div class="flex-col">
                @foreach ($errors->all() as $error)
                    <h1 class="m-b-10">Error</h1>
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
    @endif

    <div class="light-box6">
        <div class="light2"></div>
    </div>


    <div class="flex align-s">
        <div class="flex-col" style="width: 100%;">
            <div class="product-introduce1">
                @if ($product->img1)
                    <img src="{{ asset('storage/' . $product->img1) }}" alt="Product img1" class="{{ $product->img_class1 }} product-image"  id="img_class1">
                @endif

                <div class="introduce1">
                    <h1 class="{{ $product->title_class1 }} m-b-20" id="title_class1">{{ $product->title1 }}</h1>
                    <p class=" {{ $product->description_class1 }} m-b-30" id="description_class1">{{ $product->description1 }}</p>



                    <div class="flex-end gap30 m-b-40">
                        <p>0 Likes</p>
                        <p>0 Comments</p>
                        <p>0 Views</p>
                    </div>

                    <h1 class="m-b-10">Price</h1>
                    <h1 class="m-b-40">${{ $product->price }}</h1>

                    <button class="btn2">Add To Basket</button>
                </div>


            </div>

            <section>
                <div class="grid-2x align-center">
                    <div class="scroll2">
                        <div class="inner-next">
                            <div class="show-left">
                                <div class="TT-line"></div>
                                <div class="line1"></div>
                            </div>

                            <div class="__t">
                                <div class="text-up">
                                    <p class="{{ $product->description_class2 }} f-s-18" id="description_class2">{{ $product->description2 }}</p>
                                </div>


                                <div class="text2">
                                    <h1 class="{{ $product->title_class2 }} m-b-10 f-s-50" id="title_class2">{{ $product->title2 }}</h1>
                                    <p class="{{ $product->description_class3 }} f-s-18" id="description_class3">{{ $product->description3 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($product->img2)
                        <img src="{{ asset('storage/' . $product->img2) }}" alt="Product img1" class="{{ $product->img_class2 }} image-size" id="img_class2">
                    @endif
                </div>
            </section>
        </div>



        {{-- Stylemenu --}}
        <div class="style-menu">
            <div class="style-group1">
                <div class="flex-sb align-center">
                    <h1>Styles</h1>


                    <div class="icon-styles">

                        <ion-icon name="eye-outline"></ion-icon>
                        <ion-icon class="grey" name="time-outline"></ion-icon>
                        <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                    </div>
                </div>

                <div class="icon close-style-menu">
                    <ion-icon name="close-outline"></ion-icon>
                </div>
            </div>


            <div class="style-group2">

                <div class="flex-gap10 font box-komi">
                    <div class="box-simple">
                        <h2 class="animation-text-color1">A</h2>
                    </div>

                    <h1>Font</h1>
                </div>

                <div class="flex-gap10 colors box-komi">
                    <div class="box-simple">
                        <h2 class="animation-text-color2">A</h2>
                    </div>

                    <h1>Colors</h1>
                </div>

                <div class="flex-gap10 shadows box-komi">
                    <div class="box-simple">
                        <div class="shadow-show"></div>
                    </div>

                    <h1>Shadows</h1>
                </div>

                <div class="flex-gap10 radius box-komi">
                    <div class="box-simple">
                        <div class="shadow-show2"></div>
                    </div>

                    <h1>Radius</h1>
                </div>

                <div class="flex-gap10 text-shadow box-komi">
                    <div class="box-simple">
                        <h2 class="animation-text-color3">A</h2>
                    </div>

                    <h1>Text Shadows</h1>
                </div>

                <div class="flex-gap10 layout box-komi">
                    <div class="box-simple">
                        <div class="animation-text-color4">
                            <h2>Hi</h2>
                            <h2>Hello</h2>
                        </div>
                    </div>

                    <h1>Layout</h1>
                </div>
            </div>


            <div class="style-group3">
                <div class="pad-custom">
                    <h1>Customize the appearance Element select any element to style it</h1>
                </div>


                <div class="flex-sb pad-custom">
                    <h1>Styles</h1>

                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </div>




            @include('product.styles.font')

            @include('product.styles.color')

            @include('product.styles.box-shadow')

            @include('product.styles.layout')

            @include('product.styles.text-shadow')

            @include('product.styles.radius')
        </div>




    </div>



    @include('product.comments.comments')


    <section class="bg-footer">

        <div class="footer">
            <div class="logo-text">
                <h1 class="m-b-10">LaravelBuilder</h1>
                <p>2024 Copy All Rights Reserved.</p>
            </div>
            <div class="flex-footer">
                <div class="col">
                    <p>Useful Link</p>
                    <a href="#">Content</a>
                    <a href="#">Work</a>
                    <a href="#">Create</a>
                    <a href="#">Explore</a>
                    <a href="#">Terms & Services</a>
                </div>
                <div class="col">
                    <p>Community</p>
                    <a href="#">Help</a>
                    <a href="#">Partners</a>
                    <a href="#">Blog</a>
                    <a href="#">News</a>
                    <a href="#">Rewards</a>
                </div>
                <div class="col">
                    <p>Afflite</p>
                    <a href="#">Our Partner</a>
                    <a href="#">Become Partners</a>
                </div>
            </div>
        </div>
    </section>

</div>



<script>
    let addingComments = document.getElementById('adding-comments');
    let addingCommentsInProduct = document.querySelector('.adding-comments');

    addingComments.onclick = function() {
        addingCommentsInProduct.classList.toggle('active')
    }

    if (typeof isOwner !== 'undefined' && isOwner) {
        document.querySelectorAll('p, h1, img').forEach(function(element) {
            element.addEventListener('mouseenter', function() {
                if (this.closest('.header') || this.closest('.bg-footer') || this.closest(
                        '.style-menu')) return;

                if (!this.classList.contains('selected')) {
                    this.classList.add('hovering');
                }
            });

            element.addEventListener('mouseleave', function() {
                if (this.closest('.header') || this.closest('.bg-footer') || this.closest(
                        '.style-menu')) return;

                this.classList.remove('hovering');
            });


            element.addEventListener('click', function() {
                if (this.closest('.header') || this.closest('.bg-footer') || this.closest(
                        '.style-menu')) return;

                document.querySelectorAll('.selected').forEach(function(el) {
                    el.classList.remove('selected');
                });


                this.classList.add('selected');
                this.classList.remove('hovering');
            });

        });

        document.addEventListener('click', function(event) {
            if (event.target.matches('.apply-style')) {
                const selectedElement = document.querySelector('.selected');
                if (selectedElement) {
                    const shadowClass = event.target.dataset.shadowClass;
                    selectedElement.classList.toggle(shadowClass);
                }
            }
        });



    }




    document.getElementById('save-classes').addEventListener('click', function() { 
        function filterClasses(element) {
            return Array.from(element.classList)
                .filter(classname => classname !== 'selected')
                .join(' ');
        }


        let titleElement1 = document.getElementById('title_class1'); 
        let titleElement2 = document.getElementById('title_class2');
        let descriptionElement1 = document.getElementById('description_class1');
        let descriptionElement2 = document.getElementById('description_class2');
        let descriptionElement3 = document.getElementById('description_class3');
        let imgElement1 = document.getElementById('img_class1');
        let imgElement2 = document.getElementById('img_class2');



        document.getElementById('title-class1-input').value = filterClasses(titleElement1);
        document.getElementById('title-class2-input').value = filterClasses(titleElement2);
        document.getElementById('description-class1-input').value = filterClasses(descriptionElement1);
        document.getElementById('description-class2-input').value = filterClasses(descriptionElement2);
        document.getElementById('description-class3-input').value = filterClasses(descriptionElement3);
        document.getElementById('img-class1-input').value = filterClasses(imgElement1);
        document.getElementById('img-class2-input').value = filterClasses(imgElement2);


        document.getElementById('save-classes-form').submit();
    });
    
</script>
