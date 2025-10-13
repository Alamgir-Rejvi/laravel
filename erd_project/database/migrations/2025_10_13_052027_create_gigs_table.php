<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('gigs', function (Blueprint $table) {
        $table->id();
        $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
        $table->string('title');
        $table->text('description')->nullable();
        $table->decimal('price', 10, 2)->default(0);
        $table->integer('delivery_time')->nullable(); // days
        $table->string('image')->nullable();
        $table->enum('status', ['draft','published','archived'])->default('draft');
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('gigs');
    }
};
