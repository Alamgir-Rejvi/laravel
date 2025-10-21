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
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('order_no')->unique();
        $table->foreignId('buyer_id')->constrained('buyers')->onDelete('cascade');
        $table->foreignId('merchandiser_id')->constrained('merchandisers')->onDelete('cascade');
        $table->string('style_name')->nullable();
        $table->string('season')->nullable();
        $table->integer('quantity')->default(0);
        $table->decimal('unit_price', 10, 2)->nullable();
        $table->date('order_date')->nullable();
        $table->date('delivery_date')->nullable();
        $table->enum('status', ['Pending', 'In Progress', 'Completed', 'Cancelled'])->default('Pending');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
