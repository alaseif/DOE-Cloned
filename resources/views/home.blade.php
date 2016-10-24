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
            <a href="{{route('DocForm')}}">link to upload document</a>
            <br><br><br><br>
            <a href="{{route('ImgForm')}}">link to upload Image</a>
             <br><br><br><br>
             <a href="{{route('WebTable')}}">link to IAC Website's validation</a>
            <br><br><br><br>
             <a href="{{route('Map')}}">link to IAC Map</a>
            <br><br><br><br>

               
           </form>
           
           
           
         
    </div>
@endsection
