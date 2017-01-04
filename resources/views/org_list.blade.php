@extends('head')
@section('content')
<div class="container">
    <div class="row" style="padding-top: 70px!important; padding-bottom: 10px!important">
        <a href="{{ route('organization') }}"> <button class="btn btn-info">Click To Add</button></a>
    </div>
    @if(Session::has('message'))
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert">×</a>
            <strong>congrats</strong> {!!Session::get('message')!!}
        </div>
    @endif
        @if(Session::has('delete'))
            <div class="alert alert-danger">
                <a class="close" data-dismiss="alert">×</a>
                <strong>Done! </strong> {!!Session::get('delete')!!}
            </div>
        @endif

    <div class ="row ">
            <div style="text-align:center"><h2 style="background-color:#5bc0de;padding-top: 10px;padding-bottom: 10px; color: #fff">Lists of organization</h2>

            </div>
        </div>
    <br>
    <div class="table-responsive" style="margin-bottom: 10px!important">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Detail</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Image</th>
                <th>Posted Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if($datas)
                @foreach($datas as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->category }}</td>
                        <td>{{ $data->detail }}</td>
                        <td>{{ $data->location }}</td>
                        <td>{{ $data->contact }}</td>
                        <td><img class="img-thumbnail img-responsive" width="100px" height="100px" src="{{ asset('uploads/pic/'.$data->image) }}" ></td>
                        <td>{{ $data->created_at }}</td>

                        <td><div class="row" style="padding-top: 2px!important; padding-bottom: 2px!important">
                            <a href="{{ url('view/'.$data->id)}}"> <button class="btn btn-info">View</button></a>
                                {{--{{ url('view/'.$data->id }} == {{ route('view',$data->id) }}--}}
                        </div></td>
                        {{--<td>--}}
                            {{--<!-- Single button -->--}}
                            {{--<div class="btn-group">--}}
                                {{--<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                    {{--Action <span class="caret"></span>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a style="color:#1eb4ff!important;" href="/organization"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp; View</a></li>--}}
                                    {{--<li><a style="color:#23e987!important;" href="/organization"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Edit</a></li>--}}
                                    {{--<li><a style="color:rgba(255, 5, 0, 0.61)!important;" href="/organization"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Delete</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</td>--}}
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table></div> {{ $datas->links() }}



</div>
@endsection