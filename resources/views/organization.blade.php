{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}{{-- imp to make responsive--}}
    {{--<title>{{ trans('crud') }}</title>--}}
    {{--<meta name="description" content="">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1"> --}}{{--imp to make responsive--}}
    {{--<link href="/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="/css/app.css" rel="stylesheet">--}}


    {{--@yield('head')--}}

{{--</head>--}}
@extends('head')
<br><br>
<div class="container">
    <h1>Software Organization Registration</h1>

    <div class="card">
        {{--            {!! Form::open(['method' => 'POST', 'route' => 'saveProduct', 'enctype' => 'multipart/form-data']) !!}--}}

        <form method="POST" action="{{ route('save') }}" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <select class="form-control" name="category">
                    <option value="php">PHP</option>
                    <option value="java">Java</option>
                    <option value=".net">.net</option>
                    <option value="python">Python</option>
                    <option value="c++">C++</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Organization Name</label>
                <input type="text" class="form-control" name="name" id="product_name" placeholder="Organization Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Location</label>
                <input class="form-control" name="location" id="product_detail" placeholder="Location">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Contact</label>
                <input type="text" class="form-control" name="contact" id="exampleInputPassword1" placeholder="contact">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Organization Details</label>
                <textarea class="form-control" name="detail" id="product_detail" placeholder="Organization Details"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{--{!! Form::close() !!}--}}
        </form>
    </div>

</div>