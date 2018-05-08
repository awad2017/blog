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
            by <a href="index.php">Start Bootstrap</a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
        <hr>

        <hr>
        <p>{{ $post->body }}</p>
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

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