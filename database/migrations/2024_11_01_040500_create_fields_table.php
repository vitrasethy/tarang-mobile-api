<?php

use App\Models\SportType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SportType::class)->constrained();
            $table->string('name');
            $table->time('open_time');
            $table->time('close_time');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
