<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentScholarship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_scholarship', function (Blueprint $table) {
            $table->id(); 
            $table->string('student_id')->nullable();
            $table->string('scholarship_program')->nullable();
            $table->string('inclusive_year')->nullable();
            $table->string('gwa')->nullable();
            $table->string('private')->nullable();
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
        Schema::dropIfExists('student_scholarship');
    }
}
