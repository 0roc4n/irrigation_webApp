<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('drips', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_height');
            $table->integer('num_leaves');
            $table->integer('steam_diamter');
            $table->integer('mortality_rate');
            $table->integer('leaf_color');
            $table->integer('lead_weight');
            $table->integer('weight_fruit');
            $table->integer('root_lenght');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drips');
    }
};
