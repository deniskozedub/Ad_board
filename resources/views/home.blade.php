@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Bulletin board</b>
                    <a href="{{route('ad_page')}}" class="btn btn-primary btn-lg" style="position: relative; left: 500px">Create Ad</a>
                </div>
                <div class="panel-body">
                    <div>
                   @foreach($ads as $ad)
                   <a href="{{route('one_ad',['id'=>$ad->id])}}"><h4>{{$ad->title}}</h4></a>
                   <blockquote>{{$ad->description}}</blockquote>
                       <time>{{$ad->created_at}}</time> by <b>{{$ad->own->name}}</b>

                            @if(Auth::check() && Auth::user()->id == $ad->user_id )
                                <a class="btn btn-danger" href="{{route('delete_ad_handler',["id"=>$ad->id])}}" style="position: relative;left: 400px">delete</a>
                                <a class="btn btn-success" href="{{route('edit_page',['id'=>$ad->id])}}" style="position: relative;left: 400px">edit</a>
                            @endif
                       <hr>
                    @endforeach
                    </div>
                    <div style="position: relative; left: 290px">{!! $ads->render() !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
