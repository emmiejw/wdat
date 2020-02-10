<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ref');
            $table->string('company');
            $table->string('donor_name');
            $table->string('job_title');
            $table->date('dob');
            $table->boolean('gender');
            $table->string('medication1');
            $table->string('dose1');
            $table->string('medication2');
            $table->string('dose2');
            $table->string('medication3');
            $table->string('dose3');
            $table->string('medication4');
            $table->string('dose4');
            $table->string('medication5');
            $table->string('dose5');
            $table->string('reason');
            $table->boolean('id_available');
            $table->string('type_of_id');
            $table->string('id_number');
            $table->string('wit_name');
            $table->string('wit_sig');
            $table->string('relationship_donor');
            $table->string('wit_company');
            $table->string('sample_donor_sig');
            $table->date('test_date');
            $table->string('consumption');
            $table->integer('reading_1');
            $table->integer('reading_2');
            $table->integer('reading_3');
            $table->integer('reading_4');
            $table->integer('client_cut_off');
            $table->date('b_calib_date');
            $table->string('alcohol_donor_sig');
            $table->date('date_test');
            $table->boolean('temp');
            $table->integer('kit_no');
            $table->date('kit_exp_date');
            $table->boolean('met');
            $table->boolean('coc');
            $table->boolean('thc');
            $table->boolean('amp');
            $table->boolean('mop');
            $table->boolean('bzo');
            $table->boolean('mdma');
            $table->boolean('mtd');
            $table->boolean('tml');
            $table->boolean('ket');
            $table->boolean('no_action');
            $table->boolean('non_negatives');
            $table->boolean('lab_test_request');
            $table->longText('additional_info');
            $table->string('testers_sig');
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
        Schema::dropIfExists('donors');
    }
}
