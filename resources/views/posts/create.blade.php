@extends('layouts.app')
@section('content')
    <h2>Create Post</h2>

    {!! Form::open(['action' =>  'App\Http\Controllers\PostsController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
        {{-- Title Field --}}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title','', ['class' => 'form-control','placeholder' => 'Title']) !!}
        </div>
        {{-- Title Field Error Validation --}}
        @error('title')
            <div class="error"><div class="alert alert-danger">{{ $message }}</div></div>
        @enderror

        {{-- Body Field --}}
        <div class="form-group">
            {!! Form::label('body','Body') !!}
            {!! Form::textarea('body','', ['class' => 'form-control','placeholder' => 'Body']) !!}
        </div>
        {{-- Body Field Error Validation --}}
        @error('body')
        <div class="error"><div class="alert alert-danger">{{ $message }}</div></div>
        @enderror
        {{-- File Upload --}}
        <div class="form-group">
            {!! Form::file('cover_image') !!}
        </div>
        @error('cover_image')
        <div class="error"><div class="alert alert-danger">{{ $message }}</div></div>
        @enderror
        {{-- Submit Button --}}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection