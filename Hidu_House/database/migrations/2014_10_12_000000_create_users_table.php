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
//        Schema::create('users', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
//            $table->string('password');
//            $table->rememberToken();
//            $table->timestamps();
//        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('UserName');
            $table->string('email', 255);
            $table->string('Phone', 255);
            $table->string('password', 255);
            $table->integer('AddressID')->nullable();
            $table->integer('VoucherID')->nullable();

            // Add timestamps if necessary
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');

    }

};
