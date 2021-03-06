


@extends ('layouts.master')

@section('content')

<br><br>
<div class="alert-green">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  your {{$first_gap}} successfully uploaded. your file name is : {{$second_gap=== null ? 'you' : $second_gap }}
</div>


<br><br>

<div class ="centered">
    
<h2>Image uploaded so far..</h2>

<br><br>
  
<?php

    
        require_once 'HTML/Table.php';
        error_reporting(error_reporting() & ~E_STRICT); //very important to avoid internal error
        //error_reporting(E_ALL &amp; ~E_DEPRECATED &amp; ~E_NOTICE);
        
        error_reporting(0);
        
        $ID_List = array(1,2,3,4,5);

 
        $table = new HTML_Table(array("id" => "Image_Table"));
      
        $table->setAutoGrow(true);
        $table->setAutoFill("<img src='/avatar.png '  />");
        
        $table->setHeaderContents(0, 0, 'ID');
        $table->setHeaderContents(0, 1, 'Image');
        $hrAttrs = array('bgcolor' => 'silver');
        // $table->setRowAttributes(0, $hrAttrs, true);
        // $table->setColAttributes(0, $hrAttrs);
        
        
      
        $files = glob('AllStudentsImage/*.{jpg,png,gif}', GLOB_BRACE);
  
        for ($rows = 1; $rows < count($ID_List)+1; $rows++)
        {
        $table->setCellContents($rows, 0, $ID_List[$rows-1]);
        foreach($files as $file){
            
            $t=explode('.', basename($file));
    
            if($t[0]==($rows))
                $table->setCellContents($rows, 1, "<img src='/AllStudentsImage/". basename($file) ." '  />" );
            }
        }
        
        $table->altRowAttributes(1, null, array('bgcolor' => '#CCCCCC'));
        
      echo $table->toHtml();


?>
  




</div>


<br><br>

<!--<div class="gallery cf">-->
  
<!--    <?php $files = glob('AllStudentsImage/*.{jpg,png,gif}', GLOB_BRACE);  ?>-->
<!--    <?php foreach($files as $file): ?>-->
<!--    <div>-->
<!--        <?php echo "<img src='/AllStudentsImage/". basename($file) ." '  />" ; ?>-->
<!--    </div>-->
<!--    <?php endforeach; ?>-->

  

  
   
<!--</div>-->
<br><br>

<div class ="centered">

<a href="{{ route('home') }}">Back</a>

<br><br>
</div>

@endsection