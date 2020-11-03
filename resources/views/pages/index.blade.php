@extends('layouts.app')

@section('content')
    <h3>Index Page</h3>
<h4> {{ $title }} </h4>
<h4>{{ $data['value'] }}</h4>
@endsection
