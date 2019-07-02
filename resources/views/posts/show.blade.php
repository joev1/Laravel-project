@extends('layouts.app')

@section('content')
    <div id="container">
    <a class="btn btn-secondary" style="margin-bottom: 1rem;" href="/posts">Go back</a>
    <div class="card card-body bg-light">
        <h1>{{$post->title}}</h1>
        <div>
            {{$post->body}}
        </div>
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    </div>
@endsection