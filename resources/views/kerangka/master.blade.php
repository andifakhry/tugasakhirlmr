@php use Illuminate\Support\Facades\Auth; @endphp
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--    <head>--}}
{{--        <meta charset="UTF-8" />--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1.0" />--}}
{{--        <title>@yield('title')</title>--}}
{{--        @include('include.style')--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <script src="assets/static/js/initTheme.js"></script>--}}
{{--        <div id="app">--}}
{{--         @include('layout.sidebar')--}}
{{--            <div id="main">--}}
{{--                <header class="mb-3">--}}
{{--                    <a href="#" class="burger-btn d-block d-xl-none">--}}
{{--                        <i class="bi bi-justify fs-3"></i>--}}
{{--                    </a>--}}
{{--                </header>--}}
{{--                --}}{{-- <div class="page-heading">--}}
{{--                    <h3>Dashboard Arbie</h3>--}}
{{--                </div> --}}
{{--                --}}{{-- di hapus terlebih dahulu --}}
{{--                @yield('content')--}}
{{--               @include('layout.footer')--}}
{{--            </div>--}}
{{--         </div>--}}
{{--         @include('include.script')--}}
{{--      </body>--}}
{{--</html>--}}


<!DOCTYPE html>

<html lang="en">


<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>


    <link rel="shortcut icon" href="{{ asset('dist/assets/compiled/svg/favicon.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('dist/assets/compiled/css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/assets/compiled/css/app-dark.css') }}">

</head>


<body>

    <script src="{{ asset('dist/assets/static/js/initTheme.js') }}"></script>

    <div id="app">

        @include("layout.sidebar")

        <div id="main" class='layout-navbar navbar-fixed'>

            <header>

                <nav class="navbar navbar-expand navbar-light navbar-top">

                    <div class="container-fluid">

                        <a href="#" class="burger-btn d-block">

                            <i class="bi bi-justify fs-3"></i>

                        </a>


                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"

                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"

                            aria-expanded="false" aria-label="Toggle navigation">

                            <span class="navbar-toggler-icon"></span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav ms-auto mb-lg-0">

                            </ul>

                            <div class="dropdown">

                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">

                                    <div class="user-menu d-flex">

                                        <div class="user-name text-end me-3">

                                            <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>

                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>

                                        </div>

                                        <div class="user-img d-flex align-items-center">

                                            <div class="avatar avatar-md">

                                                <img src="./assets/compiled/jpg/1.jpg">

                                            </div>

                                        </div>

                                    </div>

                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"

                                    style="min-width: 11rem;">

                                    <li>

                                        <h6 class="dropdown-header">Halo {{ Auth::user()->name }} !</h6>

                                    </li>

                                    <hr class="dropdown-divider">

                                    <li>

                                        <form action="{{ route('logout') }}" method="POST">

                                            @csrf

                                            <button type="submit" class="dropdown-item"><i

                                                    class="icon-mid bi bi-box-arrow-left me-2"></i> Logout

                                            </button>

                                        </form>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </nav>

            </header>

            <div id="main-content">

                <div class="page-heading">

                    <!-- Notifikasi Stok Menipis -->

                    @if(session('warning'))

                        <div class="alert alert-warning">

                            {{ session('warning') }}

                        </div>

                    @endif


                    <x-alert></x-alert>

                    @yield('content')

                </div>

            </div>


            @include('layout.footer')

        </div>

    </div>

    <script src="{{ asset('dist/assets/static/js/components/dark.js') }}"></script>

    <script src="{{ asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('dist/assets/compiled/js/app.js') }}"></script>

</body>


</html>