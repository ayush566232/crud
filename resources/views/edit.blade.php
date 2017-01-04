@extends('head')

@section('content')

    <div class="container">
        <h1>Edit your Information</h1>

        {{--{{ dd($viewproduct) }}--}}

        <div class="card" style="padding: 20px;">
            @if($view)
                <form method="POST" action="{{ route('update',$view->id) }}" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <select class="form-control" name="category">
                            <option value="php">PHP</option>
                            <option value="java">Java</option>
                            <option value=".net">.net</option>
                            <option value="python">Python</option>
                            <option value="c++">C++</option>
                        </select>
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

                        <button type="submit" class="btn btn-success">Update</button>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    {{--{!! Form::close() !!}--}}
                </form>
                @endif
        </div>

    </div>
@endsection