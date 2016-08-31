<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocFormRequest;
use App\Http\Requests\ImageFormRequest;
use \Illuminate\Http\Request;


class NiceActionController extends Controller{
    
    
  
    public function getDocForm(){
        return view('actions.DocumentForm');
        
    }
    
    public function getImgForm(){
        return view('actions.ImageForm');
        
    }
    
     public function postImgForm(ImageFormRequest $request){
         
            $files = glob('AllStudentsImage/*.{jpg,png,gif}', GLOB_BRACE);
            $ID_Has_Image=array();
            foreach($files as $file){
            
            $t=explode('.', basename($file));
            
            array_push($ID_Has_Image,$t[0]);
     
            }  
            var_dump($ID_Has_Image);
        
        
            $imageName = $request['User_ID']. '.' . date("F-j-Y").'.'.
            $request->file('Img_uploaded')->getClientOriginalExtension();
        
            if( $request->hasFile('Img_uploaded'))
            { 
                $img = $request->file('Img_uploaded'); 
                if(!in_array($request['User_ID'],$ID_Has_Image)){
    
                $img->move(base_path() . '/public/AllStudentsImage/',$imageName);
                }
                else {
                
                $img->move(base_path() . '/public/AllPicturesUploaded/',$imageName);
                }
     
            } else {
                dd('No image was found');
            }
 
            return view('actions.SuccessfulUpload',['first_gap' => "photo",'second_gap' => $imageName]);

       
    }
  

    
    public function postDocForm(DocFormRequest $request){
       
            
                $imageName = $request['User_ID']. '.' . date("F-j-Y").'.'.
                $request->file('Doc_uploaded')->getClientOriginalExtension();
            
                if( $request->hasFile('Doc_uploaded'))
                { 
                    $img = $request->file('Doc_uploaded'); 
                    if($img->isValid()  ){
            
                    $img->move(base_path() . '/public/AllStudentsDocs/',$imageName);
                    }
         
                } else {
                    dd('No doc was found');
                }
     
                return view('actions.SuccessfulUpload',['first_gap' => "Document",'second_gap' => $imageName]);
         
     
       
    }
    
 




}

