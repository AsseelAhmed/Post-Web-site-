@extends('layouts.master')


@section('content')
<form style=' margin-left: 80px; margin-bottom: 100px'  method='POST' action='/Posts' enctype="multipart/form-data">
 @include('layouts.errors')
{{ csrf_field() }}
<div class="form-group">
  <label for="title">Post Title </label>
  <input type="text" class="form-control" id="title"name="title" >
</div>
<div class="form-group">
  <label for="Body">Post Body </label>
  <textarea id="body" name="body"class="form-control" ></textarea>
</div>
<div class="form-group">
  <label for="url">Image </label>
  <input type="file" class="form-control" id="url"name="url" >
</div>
<button type="submit" class="btn btn-primary">Publish</button>

</form>


@endsection