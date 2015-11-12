<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParketingCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('parketing_customers', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('parketing_id')->unsigned();
            $table->char('status',1);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('parketing_id')->references('id')->on('parketings')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('parketing_customers');
    }
}
