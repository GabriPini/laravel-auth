@extends('layouts.admin')

@section('content')


<h2>Crate new post</h2>
@include('partials.error')
<form action="{{route('admin.posts.store')}}" method="post">
@csrf

<div class="Form-group">
  <label for="title" >Title</label>
  <input type="text" name="title" id="title" class="form-control" placeholder="Learn phhp article" aria-describedby="titleHelper" value="{{old ('title')}}">
  <small id="titleHelper" class="text-muted">max carachters 150</small>
</div>

{{-- cambiare imput file  --}}
<div class="Form-group">
    <label for="cover_image" >cover_image</label>
    <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="Learn phhp article" aria-describedby="cover_imageHelper">
    <small id="cover_imageHelper" class="text-muted">image</small>
</div>

<div class="Form-group">
    <label for="content" class="form-label">content</label>
    <textarea class="form-control" name="content" id="content" rows="3"></textarea>

</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
