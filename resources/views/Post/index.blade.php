@extends('layouts.master')


@section('content')

<div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main" style="margin-left:60px; margin-right:40px;">

          <div class="blog-post">
          @foreach($posts as $post)
           @include('Post.artical')
          @endforeach
          </div>

        </div><!-- /.blog-main -->


      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection
