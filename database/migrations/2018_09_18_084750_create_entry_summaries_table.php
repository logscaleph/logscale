<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrySummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_summaries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entry_type_id');
            $table->unsignedInteger('diameter_range_id');
            $table->unsignedInteger('pieces');
            $table->float('volume_cubic_meters');
            $table->float('unit_price');
            $table->float('total_amount');
            $table->float('total_pieces');
            $table->float('total_volume_cubic_meters');

            $table->foreign('entry_type_id')
                ->references('id')
                ->on('entry_types')
                ->onDelete('cascade');

            $table->foreign('diameter_range_id')
                ->references('id')
                ->on('diameter_ranges')
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
        Schema::dropIfExists('entry_summaries');
    }
}
