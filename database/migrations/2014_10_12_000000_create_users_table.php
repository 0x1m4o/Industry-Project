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
            $table->string('avatar')->default('/img/avatar/default-avatar.png');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('no_hp')->unique();
            $table->string('password');
            $table->string('no_ktp')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('pekerjaan')->nullable();
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
