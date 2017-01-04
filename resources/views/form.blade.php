


@extends('head')
@section('content')
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Software Company</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('organization') }}" class="active">Add New Organization</a></li>

            </ul>
        </div>

    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="/org_list" role="button">Organization Lists &raquo;</a></p>
    </div>
</div>
<style>
    .custom{
        background-color: #00C853 !important;
    }
</style>
<div class="container">
    <div class="row">
    <!-- Example row of columns -->
        @if($values)
            @foreach($values as $data)
                <div class="col-md-4">
                    <hr>
                    <a href="{{route('view',$data->id)}}" >
                        <img src="{{ asset('uploads/pic/'.$data->image) }}" alt="image" class="img-circle" width="100px" height="100px">
                    </a>
                    <h2>{{ $data->name }}</h2>
                    <h6>{{$data->updated_at}}</h6>
                    @if($data->category == "java")
                        <p><span class="label label-danger">{{ $data->category }}</span></p>
                    @elseif($data->category == "php")
                        <p><span class="label label-primary">{{ $data->category }}</span></p>
                    @else
                        <p><span class="label custom label-default">{{ $data->category }}</span></p>
                    @endif
                    <p>{{ $data->detail }}</p>
                    <hr>
                    {{--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>--}}
                </div>
            @endforeach
        @else
            There Is no any data
        @endif
    </div>
    <hr>

    <footer>
        <p>&copy; 2016 Company, Inc.</p>
    </footer>
</div> <!-- /container -->



@endsection
