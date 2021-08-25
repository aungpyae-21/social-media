@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img style="height: 350px; width :350px" src="/storage/{{$post->image}}" class="w-100 h-100" alt="">
        </div>
        <div class="col-6">
            <div class="d-flex align-items-center pt-2">
                <img src="{{$post->user->profile->profileImage()}}" style="height: 40px; width:40px" class="rounded-circle">
                <div class="pl-2 font-weight-bold ">
                    <a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>
                </div>
                <a class="pl-2" href="">Follow</a>
            </div>
            <hr>
            <div>
                <p>{{$post->caption}}</p>
            </div>
        </div>
    </div>
</div>
@endsection