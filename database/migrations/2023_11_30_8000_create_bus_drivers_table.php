<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bus_drivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('drivers');
            $table->foreignId('bus_id')->constrained('buses');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bus_drivers');
    }
};
