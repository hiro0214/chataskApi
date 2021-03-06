<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('creator');
            $table->integer('group_id');
            $table->string('title');
            $table->string('worker');
            $table->string('detail');
            $table->string('state');
            $table->string('label');
            $table->timestamps();

            $table->foreign('group_id')
                  ->references('id')
                  ->on('groups')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
