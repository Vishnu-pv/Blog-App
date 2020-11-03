@extends('layouts.app')
@section('content')
  
    <a href="/posts" class="btn mb-2 bg-danger text-white">Go Back</a>
    <div class="card p-2 mb-2 rounded">
    <h4> <b> {{ $post->title }} </b></h4>
    <p> {{ $post->body}} </p>
    <hr> 
    <small>Written on {{ $post->created_at }}</small>   
    </div> 

@endsection