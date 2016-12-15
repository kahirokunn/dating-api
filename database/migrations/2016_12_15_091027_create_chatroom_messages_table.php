<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatroomMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatroom_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('chatroom_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->text('message')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('chatroom_id')->references('id')->on('chatrooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatroom_messages');
    }
}
