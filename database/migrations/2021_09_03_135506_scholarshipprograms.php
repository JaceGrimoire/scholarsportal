<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Scholarshipprograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarshipprograms', function (Blueprint $table) {
            $table->id(); 
            $table->string('student_id');
            $table->string('scholarship_program');
            $table->string('policy');
            $table->string('qualification');
            $table->string('stipend');
            $table->string('guidelines');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholarshipprograms');
    }
}
