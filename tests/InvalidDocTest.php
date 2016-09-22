<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InvalidDocTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        
        //Uploading a 300*225 [ic instead of a doc
        $value=1;
        $ImagePath="public/InvalidImage.jpg";
        $this->visit('/DocForm')
             ->select($value, 'User_ID')
             ->attach($ImagePath, 'Doc_uploaded')
             ->press('Upload_Button')
             ->seePageIs('/DocForm');
       
       // $this->assertRedirectedTo('/ImgForm');
    }
}
