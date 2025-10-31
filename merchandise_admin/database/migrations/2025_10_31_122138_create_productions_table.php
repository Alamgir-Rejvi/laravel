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
        Schema::create('productions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('order_no')->nullable();
            $table->date('production_date')->nullable();
            $table->integer('target_quantity')->default(0);
            $table->integer('completed_quantity')->default(0);
            $table->enum('status', ['Pending', 'In Progress', 'Completed'])->default('Pending');
            $table->text('remarks')->nullable();

            $table->timestamps();


            // foreign keys (optional)
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('set null');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productions');
    }
};
