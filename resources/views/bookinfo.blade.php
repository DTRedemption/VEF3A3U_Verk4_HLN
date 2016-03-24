@extends('layout')

@section('body')
    <div class="container">

        <div class="centering">
            <h3>Book name: {{$book->title}}</h3>
            <h3>Edition: {{$book->edition}}</h3>
            <h3>Published: {{$book->published}}</h3>
            <h3>Description: {{$book->description}}</h3>
            <hr>
            <a class="btn btn-primary" role="button" href="{{URL::previous()}}">Return</a>
        </div>


    </div>
@stop

