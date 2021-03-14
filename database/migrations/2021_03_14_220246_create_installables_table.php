<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('size');
            $table->string('url');
            $table->time('date_upload');
            $table->boolean('status')->default(true);
            $table->text('description')->nullable();
            $table->text('comments')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->integer('software_id')->unsigned()->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();

            $table->foreign('software_id')->references('id')->on('softwares');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installables');
    }
}
