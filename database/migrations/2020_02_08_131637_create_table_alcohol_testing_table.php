<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlcoholTestingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_alcohol_testing', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donor_id')->unsigned();
            $table->foreign('donor_id')->references('id')->on('donors')->onDelete('cascade');
            $table->string('consumption');
            $table->integer('reading_1');
            $table->integer('reading_2');
            $table->integer('reading_3');
            $table->integer('reading_4');
            $table->integer('client_cut_off');
            $table->date('b_calib_date');
            $table->string('sig');
            $table->date('date_test');
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
        Schema::dropIfExists('table_alcohol_testing');
    }
}
