<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softwares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('version');
            $table->string('mark');
            $table->string('type');//so, antivirus, administrativo, etc
            $table->string('color');
            $table->text('description')->nullable();
            $table->text('comments')->nullable();
            $table->decimal('price', 8, 2)->default(0);
            $table->decimal('iva', 8, 2)->default(0);
            $table->decimal('ieps', 8, 2)->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->integer('branch_id')->unsigned()->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();

            $table->foreign('branch_id')->references('id')->on('branches');
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
        Schema::dropIfExists('softwares');
    }
}
