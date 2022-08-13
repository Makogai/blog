<x-main-layout>

    <div class="slide-one-item home-slider owl-carousel">


        @foreach($recent as $item)

            <div class="site-cover site-cover-sm same-height overlay"
                 style="background-image: url('storage/{{$item->banner}}');">
                <div class="container">
                    <div class="row same-height align-items-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="post-entry">
                                <span class="post-category text-white mb-3" style="background-color: {{$item->category->color}};">{{ $item->category->name }}</span>
                                <h2 class="mb-4"><a href="/post/{{$item->id}}">{{ $item->title }}</a></h2>
                                <div class="post-meta align-items-center text-left">
                                    <figure class="author-figure mb-0 mr-3 float-left"><img src="storage/{{$item->author->photo}}"
                                                                                            alt="Image"
                                                                                            class="img-fluid"></figure>
                                    <span class="d-inline-block mt-1">Autor: {{ $item->author->name }}</span>
                                    <span>&nbsp;-&nbsp; {{ $item->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rounded border p-4">
                        <div class="row align-items-stretch">

                            @foreach($recent as $item)
                            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                                <a href="/post/{{$item->id}}" class="d-flex post-sm-entry">
                                    <figure class="mr-3 mb-0"><img src="storage/{{$item->banner}}" alt="Image" class="rounded">
                                    </figure>
                                    <div>
                                        <span class="post-category text-white mb-3" style="background-color: {{$item->category->color}};">{{ $item->category->name }}</span>
                                        <h2 class="mb-0">{{ $item->title }}</h2>

                                    </div>
                                </a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($last1 && $last2 && $last3)
    <div class="site-section">
        <div class="container">

            <div class="row align-items-stretch retro-layout">

{{--                @foreach($recent4 as $item)--}}

                <div class="col-md-5">
                    <a href="/post/{{$last1->id}}" class="hentry img-1 h-100 gradient"
                       style="background-image: url('storage/{{$last1->banner}}');">
                        <span class="post-category text-white" style="background-color: {{$last1->category->color}};">{{$last1->category->name}}</span>
                        <div class="text">
                            <h2>{{$last1->title}}</h2>
                            <span>{{$last1->created_at}}</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-7">

                    <a href="/post/{{$last2->id}}" class="hentry img-2 v-height mb30 gradient"
                       style="background-image: url('storage/{{$last2->banner}}');">
                        <span class="post-category text-white" style="background-color: {{$last2->category->color}};">{{$last2->category->name}}</span>
                        <div class="text">
                            <h2>{{$last2->title}}</h2>
                            <span>{{$last2->created_at}}</span>
                        </div>
                    </a>

                    <a href="/post/{{$last3->id}}" class="hentry img-2 v-height gradient"
                       style="background-image: url('storage/{{$last3->banner}}');">
                        <span class="post-category text-white" style="background-color: {{$last3->category->color}};">{{$last3->category->name}}</span>
                        <div class="text">
                            <h2>{{$last3->title}}</h2>
                            <span>{{$last3->created_at}}</span>
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </div>
@endif
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 section-heading"><h2>Popular Posts</h2></div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="entry2">
                        <a href="/single"><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
                        <span class="post-category text-white bg-success mb-3">Nature</span>
                        <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg"
                                                                                    alt="Image" class="img-fluid">
                            </figure>
                            <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                            <span>&nbsp;-&nbsp; February 10, 2019</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                            sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta
                            beatae quia porro id est.</p>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-4">
                    <div class="entry3 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_2.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-success mb-3">Nature</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio.</p>
                        </div>
                    </div>

                    <div class="entry3 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_3.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-success mb-3">Nature</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio.</p>
                        </div>
                    </div>

                    <div class="entry3 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_4.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-success mb-3">Nature</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="section-heading mb-5 d-flex align-items-center">
                        <h2>Sports</h2>
                        <div class="ml-auto"><a href="#" class="view-all-btn">View All</a></div>
                    </div>
                    <div class="entry2 mb-5">
                        <a href="/single"><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
                        <span class="post-category text-white bg-primary mb-3">Sports</span>
                        <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg"
                                                                                    alt="Image" class="img-fluid">
                            </figure>
                            <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                            <span>&nbsp;-&nbsp; February 10, 2019</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                            sed optio. laborum error in eum id veritatis quidem neque nesciunt at architecto nam ullam,
                            officia unde dolores officiis veniam</p>
                    </div>


                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="#"><img src="images/img_2.jpg" alt="Image"
                                                                        class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-primary mb-3">Sports</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                        </div>
                    </div>

                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_4.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-primary mb-3">Sports</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                        </div>
                    </div>

                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_1.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-primary mb-3">Sports</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="section-heading mb-5 d-flex align-items-center">
                        <h2>Travel</h2>
                        <div class="ml-auto"><a href="#" class="view-all-btn">View All</a></div>
                    </div>
                    <div class="entry2 mb-5">
                        <a href="/single"><img src="images/img_2.jpg" alt="Image" class="img-fluid rounded"></a>
                        <span class="post-category text-white bg-danger mb-3">Travel</span>
                        <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg"
                                                                                    alt="Image" class="img-fluid">
                            </figure>
                            <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                            <span>&nbsp;-&nbsp; February 10, 2019</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                            sed optio. laborum error in eum id veritatis quidem neque nesciunt at architecto nam ullam,
                            officia unde dolores officiis veniam</p>
                    </div>


                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_1.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-danger mb-3">Travel</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                        </div>
                    </div>

                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_2.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-danger mb-3">Travel</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                        </div>
                    </div>

                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_3.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-danger mb-3">Travel</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="section-heading mb-5 d-flex align-items-center">
                        <h2>Lifestyle</h2>
                        <div class="ml-auto"><a href="#" class="view-all-btn">View All</a></div>
                    </div>
                    <div class="entry2 mb-5">
                        <a href="/single"><img src="images/img_3.jpg" alt="Image" class="img-fluid rounded"></a>
                        <span class="post-category text-white bg-warning mb-3">Lifestyle</span>
                        <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg"
                                                                                    alt="Image" class="img-fluid">
                            </figure>
                            <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                            <span>&nbsp;-&nbsp; February 10, 2019</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium
                            sed optio. laborum error in eum id veritatis quidem neque nesciunt at architecto nam ullam,
                            officia unde dolores officiis veniam</p>
                    </div>


                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_4.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-warning mb-3">Lifestyle</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                        </div>
                    </div>

                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_3.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-warning mb-3">Lifestyle</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                        </div>
                    </div>

                    <div class="entry4 d-block d-sm-flex">
                        <figure class="figure order-2"><a href="/single"><img src="images/img_2.jpg" alt="Image"
                                                                              class="img-fluid rounded"></a></figure>
                        <div class="text mr-4 order-1">
                            <span class="post-category text-white bg-warning mb-3">Lifestyle</span>
                            <h2><a href="/single">The 20 Biggest Fintech Companies In America 2019</a></h2>
                            <span class="post-meta mb-3 d-block">May 12, 2019</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-main-layout>
