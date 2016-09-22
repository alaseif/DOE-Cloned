<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class validImageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
         //Uploading a 200*200 file      
        $value=1;
        $ImagePath="public/AllPicturesUploaded/1.September-2-2016.jpg";
        $this->visit('/ImgForm')
             ->select($value, 'User_ID')
             ->attach($ImagePath, 'Img_uploaded')
             ->press('Upload_Button')
             ->seePageIs('/ImgUpload');
       
       
       // $this->assertRedirectedTo('/ImgForm');
    }
}
