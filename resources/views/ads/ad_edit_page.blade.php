@extends('layouts.app')
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Your Ad </div>
                    <div class="panel-body">
                        <form method="post" action="{{route('edit_ad_handler')}}">
                            {!!  csrf_field()  !!}
                            <input type="hidden" name="id" value="{{$edit_ad->id}}">
                            <input type="hidden" name="u_id" value="{{$edit_ad->user_id}}">
                            <lable for="title"> Title:</lable>
                            <input class="form-control" type="text" name="title" value="{{$edit_ad->title}}"/>
                            <lable for="title"> Body:</lable>
                            <textarea rows="10" class="form-control" name="description">{{$edit_ad->description}}</textarea><br>
                            <input class="btn btn-success" type="submit" value="Save"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection