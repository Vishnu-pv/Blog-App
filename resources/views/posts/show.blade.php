@extends('layouts.app')
@section('content')
  
    <a href="/posts" class="btn mb-2 bg-primary text-white">Go Back</a>
    <div class="card p-2 mb-2 rounded">
        <div>
            <img src="/storage/cover_images/{{$post->cover_image}}" style="  width: 100%;
            height: auto;
            object-fit:cover; "alt="cover_image"> 

        </div>
        <div>
    <h4 class="my-2"> <b> {{ $post->title }} </b></h4>
    <p style="font-family: 'Cormorant Garamond', serif;font-size:18px;"> {{ $post->body}} </p>
    <hr> 
    <small class="font-weight-bold">Written on {{ $post->created_at }}</small>   
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    </div>
     @if (!Auth::guest())
        <div>  
            @if(Auth::user()->id == $post->user_id)       
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary mb-2">Edit</a>

            {!! Form::open(['action' =>  ['App\Http\Controllers\PostsController@destroy',$post->id],'method' => 'POST','class' => 'pull-right']) !!}

            {!! Form::hidden('_method', 'DELETE' )!!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endif
        </div>
    @endif   
    </div> 

@endsection