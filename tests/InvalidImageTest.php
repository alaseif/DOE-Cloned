<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;



class InvalidImageTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    
    {
        
      
        # Warning:
        PHPUnit_Framework_Error_Warning::$enabled = FALSE;

        # notice, strict:
        PHPUnit_Framework_Error_Notice::$enabled = FALSE;
        
        

        $value=1;
        //Uploading a 300*300 file
        $ImagePath="public/AllPicturesUploaded/1.September-2-2016.jpg";
        $this->visit('/ImgForm')
             ->select($value, 'User_ID')
             ->attach($ImagePath, 'Img_uploaded')
             ->press('Upload_Button')
             ->see('');
       
       // $this->assertRedirectedTo('/ImgForm');
    }
}
