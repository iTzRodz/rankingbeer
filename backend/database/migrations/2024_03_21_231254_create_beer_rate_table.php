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
        Schema::create('beer_rate', function (Blueprint $table) {
            $table->id();
            $table->foreignId("beer_id")
                ->constrained("beer", "id", "beer_rate_beer_id");
            $table->foreignId("user_id")
                ->constrained("users", "id", "beer_rate_user_id");
            $table->float("rate");
            $table->text("comment")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beer_rate');
    }
};
