@extends('layouts.admin')
@section('link')
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ url('admin/product/create') }}"><input type="button" class="btn btn-danger" value="Add Product"></a>
            @foreach($products as $product)
                <div class="col-xs-12 col-md-12">
                    <div class="prod-info-main prod-wrap clearfix">
                        <div class="row">

                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img height="50" src="{{ asset('images/'.$product->photo->file) }}"
                                         class="img-responsive">
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
                                            <a href="{{ url("admin/product/$product->id/edit") }}"><input type="button"
                                                                                                          class="btn btn-danger col-sm-2"
                                                                                                          value="Edit"></a>
                                            {!! Form::open(['method' =>'DELETE', 'action' => ['ProductsController@destroy',$product->id]]) !!}
                                            <div class="form-group">
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            </div>
                                            {!! Form::close() !!}
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
                                                    <label for="stars-rating-{{$i}}"><i
                                                                class="fa fa-star text-{{ $rating[$i] }}"></i></label>
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
