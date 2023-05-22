<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="bg-light position-relative">

        <nav class="container d-flex justify-content-between">
            <div class="logo-header">
                <img class="img-fluid" src="/img/dc-logo.png" alt="logo">
            </div>
            <ul class="d-flex align-items-center justify-content-center m-0 ul-header">
                @foreach ($navs as $nav)
                    <li class="p-3 d-flex align-items-center">
                        <a class="fw-semibold" :href="{{ $nav['url'] }}">{{ $nav['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="jumbo">
            <img src="\img\jumbotron.jpg" alt="jumbo">
        </div>
        <span class="text-bg-primary py-2 px-4 fw-semibold gi-pos">CURRENT SERIES</span>
    </header>

    <main>
        {{-- stampino bellino bellino --}}
        @yield('content')
        {{--  --}}

        <section class="bg-primary p-2">

            <div class="container text-light d-flex align-items-center justify-content-between p-4">
                @foreach ($options as $option)
                    <div class="d-flex align-items-center">
                        <div class="img-option">
                            <img class="" src="/img/{{ $option['path'] }}" alt="{{ $option['alt'] }}">
                        </div>
                        <span class="text-uppercase">{{ $option['description'] }}</span>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <footer>
        <section class="gi-bg">


            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="row p-4 text-light">
                            <div class="col-4 ">
                                <h3 class="py-3">DC Comics</h3>
                                <ul class="ul-footer" v-for="i in dcComics">
                                    @foreach ($dcComics as $i)
                                        <li>
                                            <a>{{ $i }}</a>
                                        </li>
                                    @endforeach
                                    <h3 class="py-3">SHOP</h3>
                                    <ul class="ul-footer" v-for="i in dcComics">
                                        @foreach ($shop as $i)
                                            <li>
                                                <a>{{ $i }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </ul>

                            </div>

                            <div class="col-4 ">
                                <h3 class="py-3">DC</h3>
                                <ul class="ul-footer" v-for="i in dcComics">
                                    @foreach ($dc as $i)
                                        <li>
                                            <a>{{ $i }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="col-4 ">
                                <h3 class="py-3">Sites</h3>
                                <ul class="ul-footer" v-for="i in dcComics">
                                    @foreach ($sites as $i)
                                        <li>
                                            <a>{{ $i }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="col-6 gi-logo">
                        <img src="\img\dc-logo-bg.png" alt="">
                    </div>

                </div>
            </div>
        </section>

        <section class="gi-dark text-light">

            <div class="container p-4 d-flex align-items-center justify-content-between">
                <button> SIGN-UP NOW!</button>

                <div class="d-flex align-items-center justify-content-center">
                    <h5 class="text-primary me-3">FOLLOW US</h5>
                    @foreach ($socials as $social)
                        <div>
                            <div class="img-social">
                                <img class="" src="/img/{{ $social['path'] }}" alt="{{ $social['alt'] }}">
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    </footer>




</body>

</html>
