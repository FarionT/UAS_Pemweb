<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('company');
            $table->string('email')->unique();
            $table->string('emailcompany')->unique();
            $table->string('notelp')->unique();
            $table->string('npwp', 20);
            $table->integer('nib');
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('language')->comment('1:en, 2:id')->default(1);
            $table->integer('role_id')->comment('1:admin, 2:member')->default(2);
            $table->boolean('accept')->default(0);
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
};
