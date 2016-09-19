@extends ('layouts.master')

@section ('content')



    <div class="centered">
      
        @if(count($errors)>0)
         
                <div>
                    <ul>
                    @foreach($errors->all() as $error)
    
                        <div class="alert-red">
                          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                             {{$error}}
                        </div>
                    @endforeach    
                    </ul>   
            </div>        
        
        @endif
   



            <br> <br> <br> <br> <br> <br> <br> <br> <br>
           
           <form action="{{ route('ImgUpload')}}" method="post" files="true" enctype="multipart/form-data">
               <label for="select-action">I want to upload a photo </label>
              
               <label for="User_ID">and my ID is ..</label>
               {!! Form::select('User_ID', array('1' => '1', '2' => '2' , '3' => '3', '4' => '4' ,'5' => '5')); !!}
               <!--<select id="User_ID" name="User_ID"/>-->
               
               <!--    <option value="1">1</option>-->
               <!--    <option value="2">2</option>-->
               <!--    <option value="3">3</option>-->
               <!--    <option value="4">4</option>-->
               <!--    <option value="5">5</option>-->
               
               <!--</select>-->
               <br><br>
               <!--{!!Form::file("Img_uploaded"); !!}-->
               <input type="file" name="Img_uploaded" id="Img_uploaded">
               <button class="btn btn-default" type="submit" name="Upload_Button">Upload your file</button>
               <input type="hidden" value="{{Session::token()}}" name="_token"/>
               <br>
               <br>
               <p  class="help-block">*Photos must be 200px x 200p<br>
               *User ID is required</p>
  
              
            </form>

               
   
           
           
           
         
    </div>
@endsection
