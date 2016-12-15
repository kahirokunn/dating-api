<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserChatroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_chatroom', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('chatroom_id')->nullable();

            // users,chatroomsテーブルのレコードが削除されたら
            // 削除されたレコードに関係するレコードを一緒に削除する
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('chatroom_id')->references('id')->on('chatrooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_chatroom');
    }
}
