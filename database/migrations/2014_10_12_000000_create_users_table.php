<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('country');
            $table->string('province');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('sexual_orientation');
            $table->string('preference');
            $table->string('university');
            $table->string('passions');
            $table->string('user_picture');
            $table->string('about_me');
            $table->string('likes');
            $table->string('likes_given');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
