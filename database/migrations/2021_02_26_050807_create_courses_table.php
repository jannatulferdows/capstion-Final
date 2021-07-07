<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_code')->unique();
            $table->string('course_name');
            $table->string('department');
            $table->bigInteger('credit');
            $table->timestamps();
        });
        Schema::create('course_faculty', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_code')->nullable();
            $table->bigInteger('faculty_id')->nullable();
            
            $table->string('department');
            $table->bigInteger('intake');
            $table->bigInteger('section');

            $table->unique(['faculty_id','course_code','intake','section']);

            $table->foreign('faculty_id')->references('faculty_id')->on('faculties')->onDelete('cascade');
            $table->foreign('course_code')->references('course_code')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
