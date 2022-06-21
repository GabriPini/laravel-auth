@extends('layouts.admin')

@section('content')


<div class="bg-dark p-5 text-center">
    <a class="btn btn-primary btn-lg " href="{{ route('admin.posts.index')}}">Back to posts</a>
</div>

    <div class="mt-4 container bg-white">
        <img src="{{$post->cover_image}}" width="200" alt="">
        <h3>{{$post->title}}</h3>
        <p>{{$post->content}}</p>
    </div>
@endsection
