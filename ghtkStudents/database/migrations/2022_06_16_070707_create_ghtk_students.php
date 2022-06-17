<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGhtkStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_students', function (Blueprint $table) {
            $table->string('primarySchool');
            $table->string('district');
            $table->string('id')->primary();
            $table->string('_class');
            $table->string('fullName');
            $table->string('DobDay');
            $table->string('DobMonth');
            $table->string('DobYear');
            $table->string('sex');
            $table->string('address');
            $table->string('ethnic');
            $table->string('currentAddress');
            $table->string('telephoneNumber');
            $table->float('firstGradeResults');
            $table->float('secondGradeResults');
            $table->float('thirdGradeResults');
            $table->float('fourthGradeResults');
            $table->float('fifthGradeResults');
            $table->string('note');
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
        Schema::dropIfExists('tbl_students');
    }
}
