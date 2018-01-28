@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Your Ad </div>
                    <div class="panel-body">
                        <form method="post" action="{{route('ad_page_handler')}}">
                            {!!  csrf_field()  !!}
                            <lable for="title">Title:<br/> @if($errors->has('title'))
                                    <span style="color: red; font-weight: bold"> {{$errors->first('title')}}</span>
                                @endif</lable>
                            <input class="form-control" type="text" name="title" value="{{old("title")}}"/>
                            <lable for="description">Body: <br/>@if($errors->has('description'))
                                    <span style="color: red; font-weight: bold"> {{$errors->first('description')}}</span>
                                @endif</lable>
                            <textarea rows="10"  class="form-control" name="description">{{old("description")}}</textarea><br>
                            <input class="btn btn-success" type="submit" value="Create Ad"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection