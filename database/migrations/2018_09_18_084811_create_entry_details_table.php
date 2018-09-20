<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entry_id')->nullable();
            $table->unsignedInteger('entry_type_id');
            $table->float('length');
            $table->float('diameter');
            $table->float('volume');

            $table->foreign('entry_id')
                ->references('id')
                ->on('entries')
                ->onDelete('cascade');

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
        Schema::dropIfExists('entry_details');
    }
}
