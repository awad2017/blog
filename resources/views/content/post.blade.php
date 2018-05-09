@extends('master')
@section('content')
    <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
    </h1>

    <!-- First Blog Post -->

        <h2>
            <a href="#">{{ $post->title }}</a>
        </h2>
        <p class="lead">
            by <a href="#">Start Bootstrap</a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
        <hr>

        <hr>
        <p>{{ $post->body }}</p>
       <br>
    <div class="comments">
        @foreach($post->comments as $comment)
          <p class="comment">{{ $comment->body }}</p>

         @endforeach
    </div>
      <br>

    <form method="post" action="/posts/{{ $post->id }}/store">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="body">Write Something ......</label>
            <textarea name="body" id="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-submit">Add Comment</button>
        </div>

    </form>

        <hr>

    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>
@stop