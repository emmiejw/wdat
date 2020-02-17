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
            $table->string('ref')->nullable();
            $table->string('company')->nullable();
            $table->string('name')->nullable();
            $table->string('job_title')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable()->nullable();
            $table->string('medication1')->nullable();
            $table->string('dose1')->nullable();
            $table->string('medication2')->nullable();
            $table->string('dose2')->nullable();
            $table->string('medication3')->nullable();
            $table->string('dose3')->nullable();
            $table->string('medication4')->nullable();
            $table->string('dose4')->nullable();
            $table->string('medication5')->nullable();
            $table->string('dose5')->nullable();
            $table->string('reason')->nullable();
            $table->boolean('id_available')->nullable();
            $table->string('type_of_id')->nullable();
            $table->string('id_number')->nullable();
            $table->string('wit_name')->nullable();
            // $table->string('wit_sig');
            $table->string('relationship_donor')->nullable();
            $table->string('wit_company')->nullable();
            $table->string('policy')->nullable();
            // $table->string('sample_donor_sig');
            $table->date('test_date')->nullable();
            $table->string('consumption')->nullable();
            $table->integer('reading_1')->nullable();
            $table->integer('reading_2')->nullable();
            $table->integer('reading_3')->nullable();
            $table->integer('reading_4')->nullable();
            $table->integer('client_cut_off')->nullable();
            $table->date('b_calib_date')->nullable();
            // $table->string('alcohol_donor_sig');
            $table->date('alcohol_test')->nullable();
            $table->boolean('temp')->nullable();
            $table->integer('kit_no')->nullable();
            $table->date('kit_exp_date')->nullable();
            $table->boolean('met')->nullable();
            $table->boolean('coc')->nullable();
            $table->boolean('thc')->nullable();
            $table->boolean('amp')->nullable();
            $table->boolean('mop')->nullable();
            $table->boolean('bzo')->nullable();
            $table->boolean('mdma')->nullable();
            $table->boolean('mtd')->nullable();
            $table->boolean('tml')->nullable();
            $table->boolean('ket')->nullable();
            $table->boolean('no_action')->nullable();
            $table->boolean('non_negatives')->nullable();
            $table->boolean('lab_test_request')->nullable();
            $table->longText('additional_info')->nullable();
            // $table->string('testers_sig');
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
