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
        Schema::create('burger_orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('telephone');
            $table->string('burger_type');
            $table->text('additional_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('burger_orders');
    }
};
