<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdentityAndUseridToDatausersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('datausers')) {
            Schema::table('datausers', function (Blueprint $table) {

                $table->string('identity')->unique();
                $table->unsignedBigInteger('user_id')->unique();
                // add foreign key for user_id
                $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datausers', function (Blueprint $table) {
            //
        });
    }
}
