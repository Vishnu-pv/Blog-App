@extends('layouts.app')
@section('content')
    <h2>Edit Post</h2>

    {!! Form::open(['action' =>  ['App\Http\Controllers\PostsController@update',$post->id],'method' => 'POST','enctype'=>'multipart/form-data']) !!}
        {{-- Title Field --}}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',$post->title, ['class' => 'form-control','placeholder' => 'Title']) !!}
        </div>
        {{-- Title Field Error Validation --}}
        @error('title')
            <div class="error"><div class="alert alert-danger">{{ $message }}</div></div>
        @enderror

        {{-- Body Field --}}
        <div class="form-group">
            {!! Form::label('body','Body') !!}
            {!! Form::textarea('body',$post->body, ['class' => 'form-control','placeholder' => 'Body']) !!}
        </div>
        {{-- Body Field Error Validation --}}
        @error('body')
        <div class="error"><div class="alert alert-danger">{{ $message }}</div></div>
        @enderror
        <div class="form-group">
            {!! Form::file('cover_image') !!}
        </div>
        @error('cover_image')
        <div class="error"><div class="alert alert-danger">{{ $message }}</div></div>
        @enderror
        {!! Form::hidden('_method', 'PUT' )!!}
        {{-- Submit Button --}}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection