@extends ('layouts.master')

@section('content')

<br><br>
<div class="alert-green">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  your {{$first_gap}} successfully uploaded. your file name is : {{$second_gap=== null ? 'you' : $second_gap }}
</div>
<br><br>
<a href="{{ route('home') }}">Back</a>

@endsection