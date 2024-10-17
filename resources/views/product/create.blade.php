@include('layouts.custom')
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="hero3">
        @include('layouts.products-menu')

        <div class="laravel-message2 animate-opacity">
            <div class="image-message">
                <img src="/images/exlamtion.png" alt="">
            </div>
            
            <div class="flex-col">
                <h1 class="m-b-10">Styles</h1>
                <p>You Can Apply Style After Creating Product</p>
            </div>
        </div>

        <div class="light-box6">
            <div class="light2"></div>
        </div>


        <div class="flex align-s">
            <div class="product-introduce1 custom-col2">
                <div class="flex-col"> {{-- image1 --}}
                    <div class="file-upload position">
                        <label for="img1" class="file-upload-img">
                            <span id="file-label">Add Your Image</span>
                            <input type="file" id="img1" name="img1" accept="image/*">
                        </label>
                    </div>
                </div>


                <div class="introduce1">
                    <div class="flex-col">
                        <label for="title1" class="m-b-10 f-s-18 white">Title</label>
                        <input type="text" id="product-title" name="title1" placeholder="Enter Product Title" required class="input-product">
                    </div>

                    <div class="flex-col">
                        <label for="description1" class="m-b-10 f-s-18 white">Description</label>
                        <textarea type="text" id="description" name="description1" placeholder="Enter Product Description" required class="textarea-product"></textarea>
                    </div>


                    <div class="flex-end gap30 m-b-40">
                        <p>0 Likes</p>
                        <p>0 Comments</p>
                        <p>0 Views</p>
                    </div>


                    <div class="flex-col">
                        <label for="price" class="m-b-10 f-s-18 white">Price</label>
                        <input type="number" step="0.01" id="price" name="price" placeholder="Enter Product Price" required class="input-product">
                    </div>

                    <button class="btn2">Add To Basket</button>
                </div>
            </div>






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
                            <div class="flex-col">
                                <div class="flex-col">
                                    <label for="description2" class="m-b-10 f-s-18 white">Description</label>
                                    <textarea type="text" id="description" name="description2" placeholder="Enter Product Description" required class="textarea-product"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="text2">
                            <div class="flex-col">
                                <label for="title2" class="m-b-10 f-s-18 white">Title</label>
                                <input type="text" id="product-title" name="title2" placeholder="Enter Product Title" required class="input-product">
                            </div>


                            <div class="flex-col">
                                <div class="flex-col">
                                    <label for="description3" class="m-b-10 f-s-18 white">Description</label>
                                    <textarea type="text" id="description" name="description3" placeholder="Enter Product Description" required class="textarea-product"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-col"> {{-- image2 --}}
                <div class="file-upload position">
                    <label for="img2" class="file-upload-img">
                        <span id="file-label">Add Your Image</span>
                        <input type="file" id="img2" name="img2" accept="image/*">
                    </label>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="scroll3">
            <div class="inner-next">
                <div class="show-left">
                    <div class="line1"></div>
                </div>

                <div class="__t">
                    <div class="text-up">
                        <p>You Can also Allow Comment If you want to add for your own product and if you don't disabled</p>


                        <div class="flex-col align-s m-t-40">
                            <label for="allow_comments" class="m-b-10 f-s-22 white">Allow Comments?</label>
                            <input type="checkbox" id="allow_comments" name="allow_comments" class="checkbox" value="1" checked>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


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
</form>

<script>
    document.getElementById('img1').addEventListener('change', function(event) {
        const fileInput = event.target;
        const fileLabel = document.getElementById('file-label');

        if (fileInput.files && fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            fileLabel.textContent = `Uploaded: ${fileName}`;
        } else {
            fileLabel.textContent = 'Add Your Image';
        }
    });


</script>