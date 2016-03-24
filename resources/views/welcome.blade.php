@extends('layout')

@section('body')
    <div class="container">

        <div class="centering">
            <h1>Book List</h1>

            @foreach ($books as $book)
                <p class="lead">
                    <a href="bookinfo/{{$book->id}}">{{ $book->title }}</a>
                </p>
            @endforeach
        </div>

    </div>
@stop