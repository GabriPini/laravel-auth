@extends('layouts.admin')

@section('content')


<h2>Crate new post</h2>
@include('partials.error')
<form action="{{route('admin.posts.store')}}" method="post">
@csrf

<div class="Form-group">
  <label for="title" >Title</label>
  <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Learn phhp article" aria-describedby="titleHelper" value="{{old ('title')}}">
  <small id="titleHelper" class="text-muted">max carachters 150</small>

  @error('title')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

{{-- cambiare imput file  --}}
<div class="Form-group">
    <label for="cover_image" >cover_image</label>
    <input type="text" name="cover_image" id="cover_image" class="form-control @error('cover_image') is-invalid @enderror" placeholder="Learn phhp article" aria-describedby="cover_imageHelper">
    <small id="cover_imageHelper" class="text-muted">image</small>

    @error('cover_image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="Form-group">
  <label for="category_id" class="form-label">Categories</label>
  <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
    <option value="">Select a category</option>

    @foreach ($categories as $category)
    {{-- TODO : FIX OLD ERROR --}}
    <option value="{{$category->id}}" {{old('category_id', $category->id) ? 'selected' : ''}}>
    {{$category->name}} </option>

    @endforeach

  </select>
  @error('category_id')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="Form-group">
    <label for="content" class="form-label">content</label>
    <textarea class="form-control  @error('content') is-invalid @enderror " name="content" id="content" rows="3"></textarea>
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
