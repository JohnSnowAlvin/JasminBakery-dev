@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Monthly Sale Status</div>

                    <div class="panel-body">
                        <!-- Main Application (Can be VueJS or other JS framework) -->
                        <div class="app">
                            <center>
                                {!! $chart->html() !!}
                            </center>
                        </div>
                        <!-- End Of Main Application -->
                        {!! Charts::scripts() !!}
                        {!! $chart->script() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
