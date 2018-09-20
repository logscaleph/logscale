<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiameterRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diameter_ranges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('range');
            $table->unsignedInteger('entry_type_id');

            $table->foreign('entry_type_id')
                ->references('id')
                ->on('entry_types')
                ->onDelete('cascade');

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
        Schema::dropIfExists('diameter_ranges');
    }
}
