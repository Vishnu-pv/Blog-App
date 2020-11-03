@extends('layouts.app')
@section('content')
    <h2>Posts</h2>
        @if ( count($posts) > 1)
            @foreach ($posts as $post)
               <div class="card border border-dark p-2 mb-2 rounded">
               <h3> <a href="/posts/{{$post->id}}">{{ $post->title }} </a> </h3>
               <small>Written on {{ $post->created_at }}</small>    
               </div> 
            @endforeach            
        @endif
@endsection