@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/posts">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{-- To parse HTML use {!! !!} syntax, instead of {{}} --}}
        {!! $post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection

