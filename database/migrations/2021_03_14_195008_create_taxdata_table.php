<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxdatas', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('taxdataable');
            $table->string('comments')->nullable();
            $table->string('type')->default("moral");
            $table->string('name');
            $table->string('rfc', 20);

            $table->string('payment_method')->nullable();
            $table->string('way_to_pay')->nullable();
            $table->string('use_of_cfdi')->nullable();
            $table->string('email_invoice')->nullable();
            $table->integer('credit_days')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();

            //Indexs
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
        Schema::dropIfExists('taxdata');
    }
}
