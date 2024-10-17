
<section>
    <div class="kament">
        <div class="grid-2x-custom gap50">
            <div class="flex-col">
                <div class="scroll3">
                    <div class="inner-next">
                        <div class="show-left">
                            <div class="line1"></div>
                        </div>
                        <div class="__t">
                            <div class="text-up">
                                <p>You can see the opinions of friends and buyers here, and ask similar questions for
                                    more information</p>



                            </div>
                            <div class="text2">
                                <h1 class="m-b-20" style="font-size: 3.5rem;">Comment</h1>
                                <p class="m-b-10 f-s-20">{{ number_format($averageRating, 1) }} <span
                                        class="f-s-15">from 5.0</span></p>
                                <p class="m-b-10 f-s-18">from all {{ $totalPoints }} points</p>
                                <p class="m-b-30 f-s-18">You can also create comment</p>
                                <button class="btn2" id="adding-comments">Add Comment</button>>
                            </div>


                            @if ($product->allow_comments)
                                <div class="adding-comments">
                                    <form action="{{ route('comments.store', $product->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                        <div class="flex-col">
                                            <label class="m-b-10 f-s-18 white" for="comment_title">Title:</label>
                                            <input type="text" id="comment_title" name="comment_title"
                                                class="input-product" required>
                                        </div>

                                        <div class="flex-col">
                                            <label class="m-b-10 f-s-18 white" for="rating">Rating:</label>
                                            <select id="rating" name="rating">
                                                <option value="bad">Bad</option>
                                                <option value="not bad">Not Bad</option>
                                                <option value="better">Better</option>
                                                <option value="amazing">Amazing</option>
                                            </select>
                                        </div>

                                        <div class="flex-col">
                                            <label class="m-b-10 f-s-18 white"
                                                for="comment_description">Description:</label>
                                            <textarea id="comment_description" name="comment_description" class="textarea-product" required></textarea>
                                        </div>

                                        <button type="submit" class="btn2">Add Comment</button>
                                    </form>
                                </div>
                            @else
                                <p>Comments are disabled for this product.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment">


                @if ($product->comments->count() > 0)
                    @foreach ($product->comments as $comment)
                        <div class="f2-info">
                            <div class="flex-align gap20">
                                <p class="f-s-13">{{ $comment->user->name }}</p>
                                <p class="none-media">{{ $comment->created_at->diffForHumans() }}</p>
                            </div>
                            <p class="green f-s-18 m-t-20">{{ ucfirst($comment->rating) }}</p>
                            <h1 class="f-s-22 webkit-box m-t-20">{{ $comment->comment_title }}</h1>
                            <p class="f-s-13 webkit-box m-t-10">{{ $comment->comment_description }}</p>
                        </div>
                    @endforeach
                @else
                    <p>No comments available.</p>
                @endif



                

            </div>



        </div>
    </div>


</section>
