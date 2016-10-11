@extends ('layouts.master')

@section ('content')



    <div class="centered">
        
        
        @if($updatedName !== null )
                <div>
                    <ul>
 
                        <div class="alert-green">
                          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                             '{{ $updatedName }}' is successfully updated
                        </div>

                    </ul>   
            </div>        
        
       @endif
      
     
      
        <h2>AIC Websites Validation</h2>
        <br><br>
        <div align="left" style="padding-left:300px; padding-right:300px; padding-up:150px; padding-down:50px;">
        <p style="font-weight: bold;">Required Items:</p>
            <ul style="list-style-type: square;">
            <li>R1 : Lead with a mission statement that highlights the vision for the IAC program</li>
            <li>R2 :&nbsp;Prominently acknowledge US Department of Energy Advanced Manufacturing Office sponsorship of the IAC program and link to AMO website:
            <ul>
            <li>http://www.eere.energy.gov/manufacturing/</li>
            </ul>
            </li>
            <li>R3 :&nbsp;List client eligibility criteria
            <ul>
            <li>List eligible top level SIC/NAICS codes</li>
            <li>Include details about center coverage area</li>
            </ul>
            </li>
            <li>R4 :&nbsp;Provide contact information including an email and phone number
            <ul>
            <li>An online form could be used instead of email</li>
            </ul>
            </li>
            <li>R5 :&nbsp;Detail assessment procedures</li>
            <li>R6 :&nbsp;Describe student participation in the program</li>
            <li>R7 :&nbsp;Link to the main IAC website:&nbsp;<a href="https://iac.university">https://iac.university</a></li>
            <li>R8 :&nbsp;If news or events are listed, the list must be maintained and current. For example, if new items haven&rsquo;t been added in a couple years, the list should be updated or removed.</li>
            </ul>
        
        <div>
        <br />

 
        

     <?php  
        
        
        require_once 'HTML/Table.php';
        error_reporting(error_reporting() & ~E_STRICT); //very important to avoid internal error
        //error_reporting(E_ALL &amp; ~E_DEPRECATED &amp; ~E_NOTICE);
        
        error_reporting(0);
        
       

 
        $webTable = new HTML_Table(array("id" => "Image_Table"));
      
        $webTable->setAutoGrow(true);
        //$webTable->setAutoFill("");
        
        $webTable->setHeaderContents(0, 0, 'Website Name');
        $webTable->setHeaderContents(0, 1, 'R1');
        $webTable->setHeaderContents(0, 2, 'R2');
        $webTable->setHeaderContents(0, 3, 'R3');
        $webTable->setHeaderContents(0, 4, 'R4');
        $webTable->setHeaderContents(0, 5, 'R5');
        
        $webTable->setHeaderContents(0, 6, 'R6');
        $webTable->setHeaderContents(0, 7, 'R7');
        $webTable->setHeaderContents(0, 8, 'R8');
        
        $webTable->setHeaderContents(0, 9, 'last modified');
       
      
        $hrAttrs = array('bgcolor' => 'silver');
        // $table->setRowAttributes(0, $hrAttrs, true);
        // $table->setColAttributes(0, $hrAttrs);
        
        
        $websitesList=array();
  
        foreach ($table as $tableRow)
        {
        array_push($websitesList,$tableRow->webName);
        $webTable->setCellContents($tableRow->id, 0, $tableRow->webName);
        $webTable->setCellContents($tableRow->id, 1, $tableRow->R1==1 ? "yes" : "No");
        $webTable->setCellContents($tableRow->id, 2, $tableRow->R2==1 ? "yes" : "No");
        $webTable->setCellContents($tableRow->id, 3, $tableRow->R3==1 ? "yes" : "No");
        $webTable->setCellContents($tableRow->id, 4, $tableRow->R4==1 ? "yes" : "No");
        $webTable->setCellContents($tableRow->id, 5, $tableRow->R5==1 ? "yes" : "No");
        $webTable->setCellContents($tableRow->id, 6, $tableRow->R6==1 ? "yes" : "No");
        $webTable->setCellContents($tableRow->id, 7, $tableRow->R7==1 ? "yes" : "No");
        $webTable->setCellContents($tableRow->id, 8, $tableRow->R8==1 ? "yes" : "No");
        $webTable->setCellContents($tableRow->id, 9, getSeason($tableRow->updated_at)." ".date("Y", strtotime($tableRow->updated_at)));
        
        }
        
        $webTable->altRowAttributes(1, null, array('bgcolor' => '#CCCCCC'));
        
        echo $webTable->toHtml();
        
        echo "<br>";

        
        echo    Form::open(array('url' =>  route('WebUpdateForm'), 'method' => 'post'));
        echo    Form::token();
        
        echo    Form::Label('selectedWeb','please select the website that has been updated');
        echo    "<br>";
        echo    Form::select('selectedWeb', $table->pluck('webName'));
        echo    "<br><br>";
        echo    Form::submit('Select!');
        echo    Form::close() ;
        
       

    ?>

           
           
       <br>
       <br>
       <br>
       <br>
      <br><br><br><br><br><br>
       

    </div>
    
@endsection
