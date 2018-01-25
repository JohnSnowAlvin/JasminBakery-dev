<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<div class="container">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->firstName }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    @foreach($products as $product)
        <div class="col-xs-12 col-md-12">
            <div class="prod-info-main prod-wrap clearfix">
                <div class="row">

                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image">
                            <img src="{{ asset('image/'.$product->image) }}" class="img-responsive">
                            <span class="tag2 {{ strtolower($product->tag) }}">
							{{ $product->tag }}
						</span>
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    {{ $product->name }}
                                </a>
                                {{-- <a href="#">
                                     <span>Bread</span>
                                 </a>--}}

                            </h5>
                            <p class="price-container">
                                <span>{{ $product->price }}</span>
                            </p>
                            <span class="tag1"></span>
                        </div>

                        <div class="description">
                            <p>{{ $product->description }}</p>
                        </div>

                        <div class="product-info smart-form">

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                                    {{--      <a href="javascript:void(0);" class="btn btn-info">More info</a>--}}
                                </div>

                                <div class="col-md-12">
                                    <div class="rating">Rating:
                                        @php
                                            unset($rating);
                                            $rate = $product->rating;
                                            for ($i=1;$i<=$rate;++$i) {
                                                $rating[] = 'danger';
                                            }
                                            while (count($rating)<5){
                                                $rating[count($rating)]="warning";
                                            }
                                           // print_r($rating);
                                        @endphp
                                        @for($i=0;$i<5;$i++)
                                            <label for="stars-rating-{{$i}}"><i class="fa fa-star text-{{ $rating[$i] }}"></i></label>
                                        @endfor

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end product -->
        </div>
    @endforeach
</div>
</body>
</html>

