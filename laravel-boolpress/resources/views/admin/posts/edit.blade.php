@extends('layouts.admin')

@section('content')

<div class="bg-dark text-center p-5">
    <a href="{{ route('admin.posts.index') }}" class="btn btn-lg btn-primary">Back to posts</a>

</div>

<div class="container">
<h1 class="text-center">Edit {{$post->title}}</h1>
    @include('partials.error')

        <form class="mt-5 text-center " action="{{ route('admin.posts.update', $post )}}" method="POST">

            @method('PATCH')
            @csrf

            <div class="p-2">
                <h5>Titolo:</h5>
                <input class="py-2 px-3 w-100 form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="inserisci il titolo" value="{{ $post->title }}" required>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="p-2">
                <h5>Url immagine:</h5>
                <input class="py-2 px-3 w-100 form-control @error('cover_image') is-invalid @enderror" type="text" id="cover_image" name="cover_image" placeholder="inserisci l'url del cover_image della copertina" value="{{ $post->cover_image }}" required>
                @error('cover_image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="p-2">
                <h5>Content:</h5>
                <input  class="py-2 px-3 w-100 form-control @error('content') is-invalid @enderror" type="text" id="content" name="content" placeholder="inserisci la descrizione" value="{{ $post->content }}" required>
                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>



            <button class="p-2 btn btn-lg btn-danger" type="reset">resetta i campi</button>
            <button  class="p-2 btn btn-lg btn-success" type="submit">Modifica i campi</button>

        </form>
</div>

@endsection
