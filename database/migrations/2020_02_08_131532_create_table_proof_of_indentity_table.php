<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProofOfIndentityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_proof_of_indentity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donor_id')->unsigned();
            $table->foreign('donor_id')->references('id')->on('donors')->onDelete('cascade');
            $table->boolean('id_available');
            $table->string('type_of_id');
            $table->bigInteger('id_number');
            $table->string('name');
            $table->string('sig');
            $table->string('relationship_donor');
            $table->string('company');
            $table->boolean('counter_sig_name');
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
        Schema::dropIfExists('table_proof_of_indentity');
    }
}
