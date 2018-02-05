@extends('layouts.app')
@section('link')
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
                    @foreach($products as $product)
                        <div class="col-xs-12 col-md-12">
                            <div class="prod-info-main prod-wrap clearfix">
                                <div class="row">

                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="product-image">
                                            <img src="{{ asset('image/'.$product->photo->file) }}" class="img-responsive" style="width: 500px; height: 250px;">
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
                                                    <form method="POST" action="{{url('cart')}}">
                                                        <input type="hidden" name="id" value="{{$product->id}}">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-danger add-to-cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            Add to cart
                                                        </button>
                                                    </form>
                                                    {{--<a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>--}}
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
    </div>
@endsection
