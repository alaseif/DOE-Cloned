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
        
           <form action="{{ route('upload')}}" method="post" files="true" enctype="multipart/form-data">
               <label for="select-action">I want to upload a ..</label>
               <select id="select-action" name="FileType">
                   <option value="Photo">Photo</option>
                   <option value="Document">Document</option>
              
               </select>
               <label for="Image_ID">and my ID is ..</label>
               <input type="text" name="Image_ID"/>
               <br><br>
               <input type="file" name="File_uploaded" id="File_uploaded">
               <button type="submit">Upload your file</button>
               <input type="hidden" value="{{Session::token()}}" name="_token"/>
               <br>
               <p  style="color:blue; font-size: 75%;text-align: center;">*Photos must be 200px x 200p<br>
               *Doucuments must be in one of "doc","docx" or "pdf" format</p>
                   
              
               
              
</form>

               
           </form>
           
           
           
         
    </div>
@endsection
