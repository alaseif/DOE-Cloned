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
        
        

      
        //Uploading a 300*225 file
        $value=1;
        $ImagePath="public/InvalidImage.jpg";
        $this->visit('/ImgForm')
             ->select($value, 'User_ID')
             ->attach($ImagePath, 'Img_uploaded')
             ->press('Upload_Button')
             ->seePageIs('/ImgForm');
       
       // $this->assertRedirectedTo('/ImgForm');
    }
}
