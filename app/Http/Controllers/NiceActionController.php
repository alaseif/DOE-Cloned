<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;


class NiceActionController extends Controller{
    
    public function getNiceAction($action, $name=null){
        return view('actions.'.$action,['name' => $name]);
        
    }
    
  

    public function postNiceAction(Request $request){
        
        
        
        if($request['FileType']== "Photo" ){
       
            $this -> validate($request, [
               
                 'File_uploaded' => 'required|image|image_size:200,200',
                 'Image_ID' => 'required|alpha'
            ]);  
        
            $imageName = $request['Image_ID']. '.' . date("F j.Y").'.'.
            $request->file('File_uploaded')->getClientOriginalExtension();
        
            if( $request->hasFile('File_uploaded'))
            { 
                $img = $request->file('File_uploaded'); 
                if($img->isValid()){
        
                $img->move(base_path() . '/public/image/',$imageName);
                }
     
            } else {
                dd('No image was found');
            }
 
            return view('actions.SuccessfulUpload',['first_gap' => $request['FileType'],'second_gap' => $imageName]);
        
        
        }    
        
        else{
        
            $this -> validate($request, [
                   
                     'File_uploaded' => 'required|mimes:doc,docx,pdf',
                     'Image_ID' => 'required|alpha'
                ]);  
            
                $imageName = $request['Image_ID']. '.' . date("F j.Y").'.'.
                $request->file('File_uploaded')->getClientOriginalExtension();
            
                if( $request->hasFile('File_uploaded'))
                { 
                    $img = $request->file('File_uploaded'); 
                    if($img->isValid()){
            
                    $img->move(base_path() . '/public/docs/',$imageName);
                    }
         
                } else {
                    dd('No doc was found');
                }
     
                return view('actions.SuccessfulUpload',['first_gap' => $request['action'],'second_gap' => $imageName]);
            
            
                
            
            
            
            
            
            
            
            
            
        }
       
    }
    
   
}

