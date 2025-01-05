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
        Schema::create('coupon_matches', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('coupon_name');   // Kupon Adı
            $table->string('match_name');    // Karşılaşma Adı
            $table->string('prediction');    // Tahmin (1, 0, 2, Üst, Alt)
            $table->text('analysis');        // Analiz Yazısı
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupon_matches');
    }
};
