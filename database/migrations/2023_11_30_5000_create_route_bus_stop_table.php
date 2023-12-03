<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('route_bus_stop', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->timestamps();
            $table->foreignId('route_id')->constrained('routes');
            $table->foreignId('bus_stop_id')->constrained('bus_stops');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('route_bus_stop');
    }
};
