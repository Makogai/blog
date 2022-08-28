<x-main-layout title=" - O name">

    <x-slot name="meta">
        <meta name="title" content="ForYouth - O nama">
        <meta name="description" content="ForYouth.me je blog koji je nastao kao potreba da se na jednom mjestu objavljuju informacije, teme i konkursi sa idejom da se mladi ljudi iz Nikšia.">
        <meta name="keywords" content="blog,mladi,niksic,mladi niksica,konkursi niksic,konkursi za mlade,novosti maldih, preporuke, preporuke filmova, preporuke serija, prilike za mlade niksic, prilike za mlade, prilike za mlade crna gora">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://foryouth.me/o-nama">
        <meta property="og:title" content="ForYouth - O nama">
        <meta property="og:description" content="ForYouth.me je blog koji je nastao kao potreba da se na jednom mjestu objavljuju informacije, teme i konkursi sa idejom da se mladi ljudi iz Nikšia.">
        <meta property="og:image" content="{{asset('images/logo.png')}}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://foryouth.me/o-nama">
        <meta property="twitter:title" content="ForYouth - O nama">
        <meta property="twitter:description" content="ForYouth.me je blog koji je nastao kao potreba da se na jednom mjestu objavljuju informacije, teme i konkursi sa idejom da se mladi ljudi iz Nikšia.">
        <meta property="twitter:image" content="{{asset('images/logo.png')}}">
    </x-slot>

    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">O nama</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .blabla img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-12 blabla">
                    {!! $aboutUs !!}
                </div>
            </div>
        </div>
    </div>

{{--    <div class="site-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 order-md-2">--}}
{{--                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">--}}
{{--                </div>--}}
{{--                <div class="col-md-5 mr-auto order-md-1">--}}
{{--                    <h2>We Love To Explore</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea voluptate odit corrupti vitae cupiditate explicabo, soluta quibusdam necessitatibus, provident reprehenderit, dolorem saepe non eligendi possimus autem repellendus nesciunt, est deleniti libero recusandae officiis. Voluptatibus quisquam voluptatum expedita recusandae architecto quibusdam.</p>--}}
{{--                    <ul class="ul-check list-unstyled success">--}}
{{--                        <li>Onsectetur adipisicing elit</li>--}}
{{--                        <li>Dolorem saepe non eligendi possimus</li>--}}
{{--                        <li>Voluptate odit corrupti vitae</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="site-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row mb-5 justify-content-center">--}}
{{--                <div class="col-md-5 text-center">--}}
{{--                    <h2>Our Editors</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus commodi blanditiis, soluta magnam atque laborum ex qui recusandae</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-lg-4 mb-5 text-center">--}}
{{--                    <img src="images/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">--}}
{{--                    <h2 class="mb-3">Kate Hampton</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum neque nobis eos quam necessitatibus rerum aliquid est tempore, cupiditate iure at voluptatum dolore, voluptates. Debitis accusamus, beatae ipsam excepturi mollitia.</p>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 col-lg-4 mb-5 text-center">--}}
{{--                    <img src="images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">--}}
{{--                    <h2 class="mb-3">Richard Cook</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum neque nobis eos quam necessitatibus rerum aliquid est tempore, cupiditate iure at voluptatum dolore, voluptates. Debitis accusamus, beatae ipsam excepturi mollitia.</p>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 col-lg-4 mb-5 text-center">--}}
{{--                    <img src="images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">--}}
{{--                    <h2 class="mb-3">Kevin Peters</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum neque nobis eos quam necessitatibus rerum aliquid est tempore, cupiditate iure at voluptatum dolore, voluptates. Debitis accusamus, beatae ipsam excepturi mollitia.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


</x-main-layout>
