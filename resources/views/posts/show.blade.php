@extends('layouts.app')

@section('content')
    <div id="container">
    <a class="btn btn-secondary" style="margin-bottom: 1rem;" href="/posts">Go back</a>
    <div class="card card-body bg-light">
        <h1>{{$post->title}}</h1>
        <div>
            {!! $post->body !!}
        </div>

    <hr>
    <small>Written on {{$post->created_at}}</small>
    </div>
    <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>


@endsection