<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('name')->nullable();
            $table->string('employer')->nullable();
            $table->date('dob')->nullable();
            $table->string('job')->nullable();
            $table->string('urineResult')->nullable();
            $table->string('breathResult')->nullable();
            $table->string('consent')->nullable();
            $table->string('image')->nullable();
            $table->string('actionRequired')->nullable();
            $table->string('notes')->nullable();
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
