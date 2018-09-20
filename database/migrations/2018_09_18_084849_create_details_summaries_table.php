<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_summaries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entry_details_id');
            $table->unsignedInteger('entry_summary_id');

            $table->foreign('entry_details_id')
                ->references('id')
                ->on('entry_details')
                ->onDelete('cascade');

            $table->foreign('entry_summary_id')
                ->references('id')
                ->on('entry_summaries')
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
        Schema::dropIfExists('details_summaries');
    }
}
