<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('height')->nullable();
            $table->string('body_type')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('residence')->nullable();
            $table->string('hometown')->nullable();
            $table->string('Job_category')->nullable();
            $table->string('educational_qualification')->nullable();
            $table->string('alcohol')->nullable();
            $table->string('cigarettes')->nullable();
            $table->timestamps();

            // usersテーブルのレコードが削除されたら
            // 削除されたレコードに関係するレコードを一緒に削除する
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_details');
    }
}
