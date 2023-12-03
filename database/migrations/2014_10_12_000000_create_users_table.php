<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('dni');
            $table->string('phone');
            $table->unsignedBigInteger('user_type_id')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('user_type_id')->references('id')->on('user_types');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
