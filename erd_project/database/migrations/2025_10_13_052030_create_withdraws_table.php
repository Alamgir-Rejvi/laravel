<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('withdraws', function (Blueprint $table) {
        $table->id();
        $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
        $table->decimal('amount', 10, 2);
        $table->string('method')->nullable(); // e.g., bank, paypal
        $table->enum('status', ['pending','approved','rejected'])->default('pending');
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('withdraws');
    }
};
