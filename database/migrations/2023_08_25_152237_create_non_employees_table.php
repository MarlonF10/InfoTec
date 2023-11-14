<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->text('genere')->default('text');
            $table->string('number_student_employees');
            $table->string('career');
            $table->integer('register')->unsigned();
            $table->foreign('register')->references('id')->
            on('registers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('non_employees');
    }
}
