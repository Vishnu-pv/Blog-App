@extends('layouts.app')
@section('content')
    <h2>Posts</h2>
        @if ( count($posts) > 0)
            @foreach ($posts as $post)
            <div class="card border border-dark p-2 mb-2 rounded">
            <div class="row">

                <div class="col-md-4">
                <img src="/storage/cover_images/{{$post->cover_image}}" style="  width: 100%;
                height: 200px;
                object-fit:cover; "alt="cover_image">

                </div>
                <div style="  border-left: 1px solid black;"></div>
                <div class="col-md-6">
                    <h3> <a href="/posts/{{$post->id}}">{{ $post->title }} </a> </h3>
                    <small>Written on {{ $post->created_at }}</small>  

                </div>

            </div>
             
            
               </div> 
            @endforeach            
        @endif
@endsection