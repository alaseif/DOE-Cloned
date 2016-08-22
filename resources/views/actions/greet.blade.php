@extends ('layouts.master')

@section('content')
<a href="{{ route('home') }}">Back</a>
<h1>I Greet {{$name=== null ? 'you' : $name }}</h1>

@endsection