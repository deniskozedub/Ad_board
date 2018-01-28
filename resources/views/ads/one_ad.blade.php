@extends('layouts.app')
@section("content")
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('one_ad',['id'=>$ad->id])}}"><h4>{{$ad->title}}</h4></a>
                    </div>
                    <div class="panel-body">
                        <div>
                            <input type="hidden" value="{{$ad->id}}">
                            <blockquote>{{$ad->description}}</blockquote>
                            <time>{{$ad->created_at}}</time> by {{$ad->own->name}}
                            @if(Auth::check() && Auth::user()->id == $ad->user_id )
                                <a class="btn btn-danger" href="{{route('delete_ad_handler',["id"=>$ad->id])}}" style="position: relative;left: 400px">delete</a>
                                <a class="btn btn-success" href="{{route('edit_page',['id'=>$ad->id])}}" style="position: relative;left: 400px">edit</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection