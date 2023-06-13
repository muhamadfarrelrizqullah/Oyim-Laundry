<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Oyim Laundry') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Oyim Laundry</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    {{-- <li class="nav-item mr-sm-3 mb-2 mb-sm-0">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('landing.langtext')
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('id')}}">Indonesia</a>
                                <a class="dropdown-item" href="{{url('en')}}">English</a>
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ url('login') }}">@lang('landing.loginOrRegister')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-skypurple py-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-white mt-5 mb-2 text-uppercase">@lang('landing.welcome')</h1>
                    <p class="lead mb-5 text-white-50">@lang('landing.tagline')</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('img/landing/header.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <section class="p-5 text-center bg-deepskyblue">
        <h3 class="font-weight-bold">@lang('landing.why')</h3>
    </section>

    <section class="kelebihan bg-skypurple text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Peralatan Lengkap dan Canggih</h4>
                    <p>Laundry kami menggunakan peralatan yang cukup lengkap dan canggih. Peralatan kami memungkinkan
                        baju tidak perlu dijemur dan mengurangi debu pada baju</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('img/landing/alat.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-skyblue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('img/landing/tipebaju.png') }}"
                        alt="" srcset="">
                </div>
                <div class="col-lg-6">
                    <h4>Segala Tipe Pakaian</h4>
                    <p>Laundry kami menerima segala tipe pakaian mulai dari baju, celana, jas, gorden, bed cover,
                        selimut, seprei, karpet, dan lain lain.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-skypurple text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Pegawai Profesional</h4>
                    <p>Laundry kami terdiri dari pegawai-pegawai yang profesional yang mampu bekerja dalam tim dengan
                        cukup baik dan handal di bidangnya sehingga membuat laundry kami minim kesalahan</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('img/landing/pegawai.png') }}"
                        alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-5 bg-deepskyblue">
        <h3 class="font-weight-bold">Apa saja yang bisa kami laundry?</h3>
    </section>

    <section class="bg-skypurple p-5 text-center">
        <div class="container">
            <div class="row flex-row flex-nowrap kategori">
                <div class="col-4 mb-4">
                    <div class="card card-rd">
                        <img src="{{ asset('img/landing/Baju.png') }}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Baju</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card card-rd">
                        <img src="{{ asset('img/landing/Celana.png') }}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Celana</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card card-rd">
                        <img src="{{ asset('img/landing/Jaket.png') }}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jaket</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card card-rd">
                        <img src="{{ asset('img/landing/Jas.png') }}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jas</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card card-rd">
                        <img src="{{ asset('img/landing/Topi.png') }}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Topi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-5 bg-deepskyblue ">
        <h3 class="font-weight-bold">Team kami!</h3>
    </section>

    <section class="bg-skypurple p-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-3 mb-4">
                    <div class="card card-rd-full">
                        <img src="{{ asset('img/landing/Farrel.jpg') }}" class="card-img-top card-rd-foto"
                            alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Muhamad Farrel</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-4">
                    <div class="card card-rd-full">
                        <img src="{{ asset('img/landing/Farrel.jpg') }}" class="card-img-top card-rd-foto"
                            alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Muhamad Farrel</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-4">
                    <div class="card card-rd-full">
                        <img src="{{ asset('img/landing/Farrel.jpg') }}" class="card-img-top card-rd-foto"
                            alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Muhamad Farrel</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-4">
                    <div class="card card-rd-full">
                        <img src="{{ asset('img/landing/Farrel.jpg') }}" class="card-img-top card-rd-foto"
                            alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Muhamad Farrel</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-4">
                    <div class="card card-rd-full">
                        <img src="{{ asset('img/landing/Farrel.jpg') }}" class="card-img-top card-rd-foto"
                            alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Muhamad Farrel</p>
                        </div>
                    </div>
                </div>
                <div class="col-9 mb-4">
                    <div class="card card-rd-full p-4">
                        <div class="text-center mb-4 pb-2">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-quotes/bulb.webp"
                                alt="Bulb" width="100">
                        </div>
                        <figure class="text-center mb-0">
                            <blockquote class="blockquote">
                                <p class="pb-3">
                                    <i class="fas fa-quote-left fa-xs text-primary"></i>
                                    <span class="lead font-italic">Many of life's failures are people who did not
                                        realize how
                                        close they were to success when they gave up.</span>
                                    <i class="fas fa-quote-right fa-xs text-primary"></i>
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0">
                                Thomas Edison
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-5 bg-deepskyblue ">
        <h3 class="font-weight-bold">Temukan kami!</h3>
    </section>

    <section class="text-white bg-skypurple">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-sm-0">
                    <h5>Alamat</h5>
                    <p>Jl. Kembang Turi No.8A, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur</p>
                    <br>
                    <h5>Kontak</h5>
                    <p>oyimlaundry@gmail.com</p>
                    <p>081234567890</p>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.97189583368024!2d112.61415585088389!3d-7.9419402575098585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78820b53e6464b%3A0x333b33740ca188e5!2sOyim%20Laundry!5e0!3m2!1sid!2sus!4v1686648613911!5m2!1sid!2sus"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; {{ config('app.name') }} 2020</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>
