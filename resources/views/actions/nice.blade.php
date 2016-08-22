@extends ('layouts.master')

@section('content')
<a href="{{ route('home') }}">Back</a>
<h1>I {{$first_gap}} {{$second_gap=== null ? 'you' : $second_gap }}</h1>

@endsection