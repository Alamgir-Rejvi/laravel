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
        // $table->id();
        // $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
        // $table->string('fabric_type');
        // $table->string('color')->nullable();
        // $table->string('supplier');
        // $table->integer('quantity');
        // $table->string('status')->default('Pending'); // Pending / In Stock / Used
        // $table->timestamps();

        $table->id();
        $table->string('fabric_name');
        $table->unsignedBigInteger('order_id'); // same type as orders.id

        $table->foreign('order_id')
          ->references('id')
          ->on('orders')
          ->onDelete('cascade');

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
