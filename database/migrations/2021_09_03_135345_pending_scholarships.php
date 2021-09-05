<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PendingScholarships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_scholarships', function (Blueprint $table) {
            $table->id(); 
            $table->string('student_id');
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
        Schema::dropIfExists('pending_scholarships');
    }
}
