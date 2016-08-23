<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    
    Route::get('/', function () {
        return view('home');
    })->name('home');
    
    Route::get('/ImgForm', [
        'uses' => 'NiceActionController@getImgForm',
        'as' => 'ImgForm'
        ]);
        
    Route::get('/DocForm', [
        'uses' => 'NiceActionController@getDocForm',
        'as' => 'DocForm'
        ]);
        
        
   
    Route::post('/ImgUpload', [
            'uses'=> 'NiceActionController@postImgForm',
            'as' => 'ImgUpload']);
           
           
    Route::post('/DocUpload', [
            'uses'=> 'NiceActionController@postDocForm',
            'as' => 'DocUpload']);
                    
          

        

    
    
 
    
  

