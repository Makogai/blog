<x-main-layout title=" - {{$category->name}}">

    <x-slot name="meta">
        <meta name="title" content="ForYouth - {{ $category->title }}">
        <meta name="description" content="{{$category->description}}">
        <meta name="keywords" content="{{$category->name}},blog,mladi,niksic,mladi niksica,konkursi niksic,konkursi za mlade,novosti maldih, preporuke, preporuke filmova, preporuke serija, prilike za mlade niksic, prilike za mlade, prilike za mlade crna gora">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://foryouth.me/blog/{{$category->slug}}">
        <meta property="og:title" content="ForYouth - {{ $category->title }}">
        <meta property="og:description" content="{{$category->description}}">
        <meta property="og:image" content="{{asset("images/$category->slug")}}.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://foryouth.me/blog/{{$category->slug}}">
        <meta property="twitter:title" content="ForYouth - {{ $category->title }}">
        <meta property="twitter:description" content="{{$category->description}}">
        <meta property="twitter:image" content="{{asset("images/$category->slug")}}.png">
    </x-slot>

    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{asset("images/$category->slug")}}.png');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <span class="post-category text-white mb-3" style="background-color: {{$category->color}};">{{ $category->name }}</span>
                        <h1 class="mb-4"><a href="#">{{ $category->name }}</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries element-animate mb-5">

                <div class="col-md-12 col-lg-8 main-content offset-lg-2">

                    @foreach($news as $item)
                    <div class="entry2 mb-5">
                        <a href="/post/{{$item->id}}"><img src="/storage/{{$item->banner}}" alt="Image" class="w-100 img-fluid rounded"></a>
                        <span class="post-category text-white mb-3" style="background-color: {{$category->color}};">{{ $category->name }}</span>
                        <h2><a href="/post/{{$item->id}}">{{ $item->title }}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img src="/storage/{{$item->author->photo}}" alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">Autor: <a href="#">{{ $item->author->name  }}</a></span>
                            <span>&nbsp;-&nbsp; {{ $item->created_at  }}</span>
                        </div>
                        <p>{!! (strlen($item->content) > 200) ? substr(strip_tags($item->content),0,200).'...' : strip_tags($item->content) !!}</p>
                    </div>
                    @endforeach



                    <div class="row text-center pt-5 border-top">
                        <div class="col-md-12">
                            <div class="custom-paginaation">
                                {!! $news->links('paginator') !!}
                            </div>
                        </div>
                    </div>

                </div>

                <!-- END main-content -->

{{--                <div class="col-md-12 col-lg-4 sidebar">--}}
{{--                    <div class="sidebar-box search-form-wrap">--}}
{{--                        <form action="#" class="search-form">--}}
{{--                            <div class="form-group">--}}
{{--                                <span class="icon fa fa-search"></span>--}}
{{--                                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <!-- END sidebar-box -->--}}
{{--                    <div class="sidebar-box">--}}
{{--                        <div class="bio text-center">--}}
{{--                            <img src="images/person_2.jpg" alt="Image Placeholder" class="img-fluid mb-5">--}}
{{--                            <div class="bio-body">--}}
{{--                                <h2>Craig David</h2>--}}
{{--                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>--}}
{{--                                <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>--}}
{{--                                <p class="social">--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>--}}
{{--                                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- END sidebar-box -->--}}
{{--                    <div class="sidebar-box">--}}
{{--                        <h3 class="heading">Popular Posts</h3>--}}
{{--                        <div class="post-entry-sidebar">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="">--}}
{{--                                        <img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">--}}
{{--                                        <div class="text">--}}
{{--                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>--}}
{{--                                            <div class="post-meta">--}}
{{--                                                <span class="mr-2">March 15, 2018 </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="">--}}
{{--                                        <img src="images/img_2.jpg" alt="Image placeholder" class="mr-4">--}}
{{--                                        <div class="text">--}}
{{--                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>--}}
{{--                                            <div class="post-meta">--}}
{{--                                                <span class="mr-2">March 15, 2018 </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="">--}}
{{--                                        <img src="images/img_3.jpg" alt="Image placeholder" class="mr-4">--}}
{{--                                        <div class="text">--}}
{{--                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>--}}
{{--                                            <div class="post-meta">--}}
{{--                                                <span class="mr-2">March 15, 2018 </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- END sidebar-box -->--}}

{{--                    <div class="sidebar-box">--}}
{{--                        <h3 class="heading">Categories</h3>--}}
{{--                        <ul class="categories">--}}
{{--                            <li><a href="#">Food <span>(12)</span></a></li>--}}
{{--                            <li><a href="#">Travel <span>(22)</span></a></li>--}}
{{--                            <li><a href="#">Lifestyle <span>(37)</span></a></li>--}}
{{--                            <li><a href="#">Business <span>(42)</span></a></li>--}}
{{--                            <li><a href="#">Adventure <span>(14)</span></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- END sidebar-box -->--}}

{{--                    <div class="sidebar-box">--}}
{{--                        <h3 class="heading">Tags</h3>--}}
{{--                        <ul class="tags">--}}
{{--                            <li><a href="#">Travel</a></li>--}}
{{--                            <li><a href="#">Adventure</a></li>--}}
{{--                            <li><a href="#">Food</a></li>--}}
{{--                            <li><a href="#">Lifestyle</a></li>--}}
{{--                            <li><a href="#">Business</a></li>--}}
{{--                            <li><a href="#">Freelancing</a></li>--}}
{{--                            <li><a href="#">Travel</a></li>--}}
{{--                            <li><a href="#">Adventure</a></li>--}}
{{--                            <li><a href="#">Food</a></li>--}}
{{--                            <li><a href="#">Lifestyle</a></li>--}}
{{--                            <li><a href="#">Business</a></li>--}}
{{--                            <li><a href="#">Freelancing</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- END sidebar -->

            </div>
        </div>
    </section>
</x-main-layout>
