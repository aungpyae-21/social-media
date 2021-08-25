@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-4 d-flex justify-content-center align-items-center">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle" style="height: 150px; width:150px">
       </div>
       <div class="col-8 pt-2">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex justify-content-center pb-2" >
                    <div class="h3 pr-3">{{$user->username}}</div>
                    <follow-button></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
                
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-4"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-4"><strong>1</strong> follower</div>
                <div class="pr-4"><strong>1</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#" class="text-dark">{{$user->profile->url}}</a></div>
       </div>
   </div>
   <div class="row pt-5">
       @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
               <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}"  style="height: 350px: width : 350px;" class="w-100 h-100">
               </a>
            </div>
       @endforeach
   </div>
</div>
@endsection
