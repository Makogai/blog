<x-main-layout>

    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('../storage/{{$post->banner}}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <span class="post-category text-white  mb-3" style="background-color: {{$post->category->color}};">{{ $post->category->name }}</span>
                        <h1 class="mb-4"><a href="#">{{ $post->title }}</a></h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="../storage/{{$post->author->photo}}" alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">{{ $post->author->name }}</span>
                            <span>&nbsp;-&nbsp; {{ $post->created_at  }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .post-content-body img{
            width: 100%;
            height: auto;
        }
    </style>
    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-8 main-content">

                    <div class="post-content-body">
                        {!! $post->content !!}
                    </div>


                    <div class="pt-5">
                        <p>Kategorija:  <a href="../blog/{{$post->category->slug}}">{{ $post->category->name }}</a>, Tagovi: @foreach($post->tags as $tag) <span class="px-2 py-1 text-white rounded" style="background-color: {{$post->category->color}};">{{$tag->name}}</span> @endforeach</p>
                    </div>


{{--                    <div class="pt-5">--}}
{{--                        <h3 class="mb-5">6 Comments</h3>--}}
{{--                        <ul class="comment-list">--}}
{{--                            <li class="comment">--}}
{{--                                <div class="vcard">--}}
{{--                                    <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                </div>--}}
{{--                                <div class="comment-body">--}}
{{--                                    <h3>Jean Doe</h3>--}}
{{--                                    <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                    <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="comment">--}}
{{--                                <div class="vcard">--}}
{{--                                    <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                </div>--}}
{{--                                <div class="comment-body">--}}
{{--                                    <h3>Jean Doe</h3>--}}
{{--                                    <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                    <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                </div>--}}

{{--                                <ul class="children">--}}
{{--                                    <li class="comment">--}}
{{--                                        <div class="vcard">--}}
{{--                                            <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                        </div>--}}
{{--                                        <div class="comment-body">--}}
{{--                                            <h3>Jean Doe</h3>--}}
{{--                                            <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                            <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                        </div>--}}


{{--                                        <ul class="children">--}}
{{--                                            <li class="comment">--}}
{{--                                                <div class="vcard">--}}
{{--                                                    <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                                </div>--}}
{{--                                                <div class="comment-body">--}}
{{--                                                    <h3>Jean Doe</h3>--}}
{{--                                                    <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                                    <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                                </div>--}}

{{--                                                <ul class="children">--}}
{{--                                                    <li class="comment">--}}
{{--                                                        <div class="vcard">--}}
{{--                                                            <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="comment-body">--}}
{{--                                                            <h3>Jean Doe</h3>--}}
{{--                                                            <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                                            <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li class="comment">--}}
{{--                                <div class="vcard">--}}
{{--                                    <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                </div>--}}
{{--                                <div class="comment-body">--}}
{{--                                    <h3>Jean Doe</h3>--}}
{{--                                    <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                    <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- END comment-list -->--}}

{{--                        <div class="comment-form-wrap pt-5">--}}
{{--                            <h3 class="mb-5">Leave a comment</h3>--}}
{{--                            <form action="#" class="p-5 bg-light">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="name">Name *</label>--}}
{{--                                    <input type="text" class="form-control" id="name">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="email">Email *</label>--}}
{{--                                    <input type="email" class="form-control" id="email">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="website">Website</label>--}}
{{--                                    <input type="url" class="form-control" id="website">--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="message">Message</label>--}}
{{--                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="submit" value="Post Comment" class="btn btn-primary">--}}
{{--                                </div>--}}

{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <img src="../storage/{{$post->author->photo}}" alt="Image Placeholder" class="img-fluid mb-5">
                            <div class="bio-body">
                                <h2>{{ $post->author->name }}</h2>
                                <p class="mb-4">{{ strip_tags($post->author->bio) }}</p>
{{--                                <p class="social">--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>--}}
{{--                                </p>--}}
                            </div>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <!-- END sidebar-box -->

                <!-- END sidebar -->

            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Takođe pogledajte</h2>
                </div>
            </div>
            <div class="row">

                @foreach($recent as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="entry2 mb-5">
                        <a href="#"><img src="../storage/{{$item->banner}}" alt="Image" class=" w-100 img-fluid rounded"></a>
                        <span class="post-category text-white mb-3" style="background-color: {{$item->category->color}};">{{ $item->category->name }}</span>
                        <h2><a href="/{{$item->id}}">{{ $item->title }}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img src="../storage/{{$item->author->photo}}" alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By <a href="#">{{ $item->author->name }}</a></span>
                            <span>&nbsp;-&nbsp; {{ $item->created_at }}</span>
                        </div>
                        <p>{!! (strlen($item->content) > 100) ? substr(strip_tags($item->content),0,100).'...' : strip_tags($item->content) !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </section>
    <!-- END section -->
</x-main-layout>
