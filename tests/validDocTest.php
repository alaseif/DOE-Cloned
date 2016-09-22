<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class validDocTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
       //Uploading a doc file
        $value=1;
        $ImagePath="public/ValidDoc.docx";
        $this->visit('/DocForm')
             ->select($value, 'User_ID')
             ->attach($ImagePath, 'Doc_uploaded')
             ->press('Upload_Button')
             ->seePageIs('/DocUpload');
       
    }
}
