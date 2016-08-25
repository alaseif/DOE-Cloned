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
          
           <form action="{{ route('DocUpload')}}" method="post" files="true" enctype="multipart/form-data">
               <label for="select-action">I want to upload a Document</label>
              
                <label for="User_ID">and my ID is ..</label>
                <select id="User_ID" name="User_ID"/>
               
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
               
               </select>
            
               <input type="file" name="Doc_uploaded" id="Doc_uploaded">
               <button type="submit">Upload your Document</button>
               <input type="hidden" value="{{Session::token()}}" name="_token"/>
               <br>
               <p  style="color:blue; font-size: 75%;text-align: center;">
                  *Documents must be in one of "doc","docx" or "pdf" format<br>
                  *User Id is required</p>
                  

               
           </form>
           
           
           
         
    </div>
@endsection
