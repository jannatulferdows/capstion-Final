<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id');
            $table->bigInteger('semester_id');
            $table->string('course_code');
            $table->float('mid')->nullable();
            $table->float('attendance')->nullable();
            $table->float('assignment')->nullable();
            $table->float('ct')->nullable();
            $table->float('final')->nullable();
            $table->string('grade');
            $table->unique(['student_id','course_code','semester_id']);
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
        Schema::dropIfExists('results');
    }
}
