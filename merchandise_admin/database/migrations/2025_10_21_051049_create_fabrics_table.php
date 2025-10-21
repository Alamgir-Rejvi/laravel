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
    Schema::create('fabrics', function (Blueprint $table) {
        $table->id();
        $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
        $table->string('fabric_type');
        $table->string('color')->nullable();
        $table->decimal('required_qty', 10, 2)->default(0);
        $table->decimal('received_qty', 10, 2)->default(0);
        $table->string('status')->default('Pending'); // Pending / In Stock / Used
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fabrics');
    }
};
