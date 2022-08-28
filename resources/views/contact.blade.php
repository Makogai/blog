<x-main-layout title=" - Kontaktirajte nas">

    <x-slot name="meta">
        <meta name="title" content="ForYouth - Kontakt">
        <meta name="description" content="ForYouth.me je blog koji je nastao kao potreba da se na jednom mjestu objavljuju informacije, teme i konkursi sa idejom da se mladi ljudi iz Nikšia.">
        <meta name="keywords" content="blog,mladi,niksic,mladi niksica,konkursi niksic,konkursi za mlade,novosti maldih, preporuke, preporuke filmova, preporuke serija, prilike za mlade niksic, prilike za mlade, prilike za mlade crna gora">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://foryouth.me/kontakt">
        <meta property="og:title" content="ForYouth - Kontakt">
        <meta property="og:description" content="ForYouth.me je blog koji je nastao kao potreba da se na jednom mjestu objavljuju informacije, teme i konkursi sa idejom da se mladi ljudi iz Nikšia.">
        <meta property="og:image" content="{{asset('images/logo.png')}}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://foryouth.me/kontakt">
        <meta property="twitter:title" content="ForYouth - Kontakt">
        <meta property="twitter:description" content="ForYouth.me je blog koji je nastao kao potreba da se na jednom mjestu objavljuju informacije, teme i konkursi sa idejom da se mladi ljudi iz Nikšia.">
        <meta property="twitter:image" content="{{asset('images/logo.png')}}">
    </x-slot>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Swal.fire({
        //     title: 'Error!',
        //     text: 'Do you want to continue',
        //     icon: 'error',
        //     confirmButtonText: 'Cool'
        // })

        // OnSubmit function to send ajax call to backend
        function OnSubmit() {
            let name = $('#fname').val();
            let lname = $('#lname').val();
            let email = $('#email').val();
            let subject = $('#subject').val();
            let message = $('#message').val();
            let data = {
                first_name: name,
                last_name: lname,
                email: email,
                subject: subject,
                message: message
            };
            console.log(data)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/contact',
                method: 'POST',
                data: data,
                dataType: 'json',
                success: function (){
                    Swal.fire({
                        title: 'Uspešno!',
                        text: 'Uspešno ste poslali poruku!',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                },
                error: function (){
                    Swal.fire({
                        title: 'Neuspešno!',
                        text: 'Došlo je do greške prilikom slanja poruke. Molimo Vas pokušajte ponovo!',
                        icon: 'error',
                        confirmButtonText: 'Ok'
})
                }
            });
            $('#fname').val('');
            $('#lname').val('');
            $('#email').val('');
            $('#subject').val('');
            $('#message').val('');
        }


    </script>
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">Kontaktirajte nas</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mb-5">



                    <form class="p-5 bg-white">


                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Ime</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Prezime</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Naslov</label>
                                <input type="subject" id="subject" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Poruka</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                            </div>
                        </div>

                        <meta name="csrf-token" content="{{ csrf_token() }}" />
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="button"  onclick="OnSubmit()" value="Pošalji poruku" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-md-5">

                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">Adresa</p>
                        <p class="mb-4">//</p>

                        <p class="mb-0 font-weight-bold">Telefon</p>
                        <p class="mb-4"><a href="#">//</a></p>

                        <p class="mb-0 font-weight-bold">Email</p>
                        <p class="mb-0"><a href="#">foryouthmne@gmail.com</a></p>

                    </div>

{{--                    <div class="p-4 mb-3 bg-white">--}}
{{--                        <h3 class="h5 text-black mb-3">More Info</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>--}}
{{--                        <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>

</x-main-layout>
