<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIacWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iac_websites', function (Blueprint $table) {
            
            $table->increments('id');
            $table->timestamps();
            $table->string('webName');
            $table->boolean('R1');
            $table->boolean('R2');
            $table->boolean('R3');
            $table->boolean('R4');
            $table->boolean('R5');
            $table->boolean('R6');
            $table->boolean('R7');
            $table->boolean('R8');
          
           
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('iac_websites');
    }
}
