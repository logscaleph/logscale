<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier');
            $table->string('truck_no');
            $table->string('delivered_to');
            $table->datetime('date');
            $table->unsignedInteger('total_pieces');
            $table->float('total_volume_cubic_meters');
            $table->float('grand_total');
            $table->float('payment')->nullable();
            $table->float('balance')->nullable();
            $table->float('cash_advance')->nullable();
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
        Schema::dropIfExists('entries');
    }
}
