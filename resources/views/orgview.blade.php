
@extends('head')
@section('content')
    <div class="container">
        <div class="row" style="padding-top: 70px!important; padding-bottom: 1px!important">
        <h2>Organization Detail Information</h2>
            </div>
        @if($orgview1)
            <div class="row" style="margin: 0px 0!important; padding: 20px!important">
                <p> Posted at :  {{$orgview1->updated_at}}</p>
                <hr>
                   <h3> Category : {{$orgview1->category}}</h3>
                    <h3> Name :  {{$orgview1->name}}</h3>
                    <h3> Location : {{$orgview1->location}}</h3>
                    <img class="img-thumbnail img-responsive" width="50%px" src="{{ asset('uploads/pic/'.$orgview1->image) }}" />
                    <h3> Details : {{$orgview1->detail}}</h3>
                    <h3> Contact No. : {{$orgview1->contact}}</h3>

                <div class="row" style="padding-top: 2px!important; padding-bottom: 2px!important">
                    <a href="{{ url('delete/'.$orgview1->id)}}"> <button class="btn btn-danger">Delete</button></a>
                    <a href="{{ url('edit/'.$orgview1->id)}}"> <button class="btn btn-default">Edit</button></a>
                </div>
                    {{--@if($viewproduct->product_category === "clothing")--}}
                        {{--<p><span class="label label-default">clothing</span></p>--}}
                    {{--@elseif($viewproduct->product_category === "electronic")--}}
                        {{--<p><span class="label label-danger">electroninc</span></p>--}}
                    {{--@elseif($viewproduct->product_category === "watch")--}}
                        {{--<p><span class="label label-info">watch</span></p>--}}
                    {{--@elseif($viewproduct->product_category === "mobile")--}}
                        {{--<p><span class="label label-success">mobile</span></p>--}}
                    {{--@elseif($viewproduct->product_category === "gaming")--}}
                        {{--<p><span class="label label-warning">gaming</span></p>--}}
                    {{--@else--}}
                        {{--<p> There is no any category for this product</p>--}}
                    {{--@endif--}}

                    {{--<p>Detail: {{ $viewproduct->product_detail }}</p>--}}
                    {{--<p>Price: {{ $viewproduct->product_price }}</p>--}}
                    {{--<p>Posted Date: {{ $viewproduct->created_at }}</p>--}}

        @endif

    @endsection