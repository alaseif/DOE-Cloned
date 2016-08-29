


@extends ('layouts.master')

@section('content')

<br><br>
<div class="alert-green">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  your {{$first_gap}} successfully uploaded. your file name is : {{$second_gap=== null ? 'you' : $second_gap }}
</div>


<br><br>

<div class ="centered">

<p>Image uploaded so far..</p>

</div>


<br><br>

<div class="gallery cf">
  
    <?php $files = glob('AllStudentsImage/*.{jpg,png,gif}', GLOB_BRACE);  ?>
    <?php foreach($files as $file): ?>
    <div>
        <?php echo "<img src='/AllStudentsImage/". basename($file) ." '  />" ; ?>
    </div>
    <?php endforeach; ?>

  

  
   
</div>
<br><br>

<div class ="centered">

<a href="{{ route('home') }}">Back</a>

</div>

@endsection