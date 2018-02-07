<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jasmin Bakery') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">

    @yield('link')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li>
                        <a href="{{ url('/cartView') }}">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            @if( Cart::count()>0 )
                                ({{ Cart::count() }})
                            @endif
                        </a>
                    </li>
                    <li><a href="{{ url('/products') }}">Products</a></li>
                    <li><a href="{{ url('/printTable') }}">Pre-Order</a></li>

                @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true">
                                {{ ucfirst(Auth::user()->firstName) }} Account<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('user/profile') }}">
                                        Manage My Account
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/user/order') }}">
                                        My Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/user/returnProduct') }}">
                                        Return Expired Product
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/buttons.flash.min.js') }}"></script>
{!! Html::script('js/buttons.html5.min.js') !!}
{!! Html::script('js/buttons.print.min.js') !!}
{!! Html::script('js/dataTables.buttons.min.js') !!}
{!! Html::script('js/jquery-1.12.4.js') !!}
{{--{!! Html::script('js/jquery.dataTables.js') !!}--}}
{!! Html::script('js/jszip.min.js') !!}
{{--{!! Html::script('js/pdfmake.min.js') !!}--}}
{{--{!! Html::script('js/vfs_fonts.js') !!}--}}

<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/jquery-1.12.4.js') }}"></script>
{{--<script src="{{ asset('js/jquery.dataTables.js') }}"></script>--}}
<script src="{{ asset('js/jszip.min.js') }}"></script>
{{--<script src="{{ asset('js/pdfmake.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/vfs_fonts.js') }}"></script>--}}

@yield('script')

</body>
</html>
