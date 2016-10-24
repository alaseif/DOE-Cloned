<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocFormRequest;
use App\Http\Requests\ImageFormRequest;
use \Illuminate\Http\Request;
use App\iac_website;


class NiceActionController extends Controller{
    
    public function getWebTable(){
        
        $table = iac_website::all();
        return view('actions.WebTable',['table' => $table,'updatedName' =>null] );
        
    }
    public function Map(){
        
        
        return view('actions.Map' );
        
    }
  
    public function getDocForm(){
        return view('actions.DocumentForm');
        
    }
    
    public function getImgForm(){
        return view('actions.ImageForm');
        
    }
    
    public function postWebForm(Request $request){
        
        
        return view('actions.WebUpdateForm',['updatingWeb' => $request['selectedWeb']]);
    }
     public function postWebUpdated(Request $request){
        
        
        $table = iac_website::all();
        $updatedRow = $table->find(intval($request['updatedID']));
        $updatedRow->R1=$request['R1'];
        $updatedRow->R2=$request['R2'];
        $updatedRow->R3=$request['R3'];
        $updatedRow->R4=$request['R4'];
        $updatedRow->R5=$request['R5'];
        $updatedRow->R6=$request['R6'];
        
        $updatedRow->R7=$request['R7'];
        $updatedRow->R8=$request['R8'];
        
        $updatedRow->save();
        
        return view('actions.WebTable',['table' => $table,'updatedName' => $request['updatedName']] );
    }
    public function postImgForm(ImageFormRequest $request){
         
            $files = glob('AllStudentsImage/*.{jpg,png,gif}', GLOB_BRACE);
            $ID_Has_Image=array();
            foreach($files as $file){
            
            $t=explode('.', basename($file));
            
            array_push($ID_Has_Image,$t[0]);
     
            }  
        //    var_dump($ID_Has_Image);
        
        
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
 
            return view('actions.SuccessfulImageUpload',['first_gap' => "photo",'second_gap' => $imageName]);

       
    }
  

    
    public function postDocForm(DocFormRequest $request){
        
            $files = glob('AllStudentsDocs/*.{doc,docx,pdf}', GLOB_BRACE);
            $ID_Has_Doc=array();
            foreach($files as $file){
                $t=explode('.', basename($file));
            array_push($ID_Has_Doc,$t[0]);
     
            }  
            //var_dump($ID_Has_Doc);       
            
            $imageName = $request['User_ID']. '.' . date("F-j-Y").'.'.
            $request->file('Doc_uploaded')->getClientOriginalExtension();
            
            if( $request->hasFile('Doc_uploaded')){
                
                $img = $request->file('Doc_uploaded'); 
                if(!in_array($request['User_ID'],$ID_Has_Doc)){
    
                    $img->move(base_path() . '/public/AllStudentsDocs/',$imageName);
                }
                else {
                
                    $img->move(base_path() . '/public/AllDocumentsUploaded/',$imageName);
                }
         
            } 
            else {
                dd('No doc was found');
            }
     
                return view('actions.SuccessfulDocUpload',['first_gap' => "Document",'second_gap' => $imageName]);
         
     
       
    }
    
 




}

