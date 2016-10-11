@extends ('layouts.master')

@section ('content')



    <div class="centered">


            <br> <br> <br> <br> <br> <br> 
        
            
      
            
    <?php    
    
        use App\iac_website;
        
        $table = iac_website::all();
        $updatingName=$table->where('id', intval($updatingWeb)+1)->pluck('webName');
        
        
        
        echo    "<h3>Validation table update for  ' $updatingName[0] ' </h3>"; 
        
        echo    "<br><br>";
        echo    '<div align="left" style="padding-left:300px; padding-right:300px; padding-up:150px; padding-down:50px;">';
        echo    Form::open(array('url' =>  route('WebUpdated'), 'method' => 'post'));
        echo    Form::token();
        echo    Form::hidden('updatedID',intval($updatingWeb)+1 );
        echo    Form::hidden('updatedName',$updatingName[0]);
        
        //R1
        echo    "<li>Lead with a mission statement that highlights the vision for the IAC program</li>";
        echo    "<br>";
        
        echo    Form::radio('R1', 1, true);
        echo    " yes<br>";
        echo    Form::radio('R1', 0);
        echo    " No<br><br>";
        
        //R2
        echo    "<li>Prominently acknowledge US Department of Energy Advanced Manufacturing Office sponsorship of the IAC program and link to AMO website</li>";
        echo    "<br>";
        
        echo    Form::radio('R2', 1, true);
        echo    " yes<br>";
        echo    Form::radio('R2', 0);
        echo    " No<br><br>";
        
        //R3
        echo    "<li>List of client eligibility criteria</li>";
        echo    "<br>";
        
        echo    Form::radio('R3', 1, true);
        echo    " yes<br>";
        echo    Form::radio('R3', 0);
        echo    " No<br><br>";
        
        //R4
        echo    "<li>Provide contact information including an email and phone number</li>";
        echo    "<br>";
        
        echo    Form::radio('R4', 1, true);
        echo    " yes<br>";
        echo    Form::radio('R4', 0);
        echo    " No<br><br>";
        
        //R5
        echo    "<li>Detail assessment procedures</li>";
        echo    "<br>";
        
        echo    Form::radio('R5', 1, true);
        echo    " yes<br>";
        echo    Form::radio('R5', 0);
        echo    " No<br><br>";
        
        //R6
        echo    "<li>Describe student participation in the program</li>";
        echo    "<br>";
        
        echo    Form::radio('R6', 1, true);
        echo    " yes<br>";
        echo    Form::radio('R6', 0);
        echo    " No<br><br>";
        
        //R7
        echo    "<li>Link to the main IAC website:&nbsp;<a href='https://iac.university'>https://iac.university</a></li>";
        echo    "<br>";
        
        echo    Form::radio('R7', 1, true);
        echo    " yes<br>";
        echo    Form::radio('R7', 0);
        echo    " No<br><br>";
        
        //R8
        echo    "<li>If news or events are listed, the list must be maintained and current. For example, if new items haven&rsquo;t been added in a couple years, the list should be updated or removed</li>";
        echo    "<br>";
        
        echo    Form::radio('R8', 1, true);
        echo    " yes<br>";
        echo    Form::radio('R8', 0);
        echo    " No<br><br>";
      
        
        echo    Form::submit('Save');
        echo    Form::close() ;
        
        echo    "</div>";
        
        
        
   
    ?>       
           
           
         <br><br><br><br><br><br>
    </div>
@endsection
