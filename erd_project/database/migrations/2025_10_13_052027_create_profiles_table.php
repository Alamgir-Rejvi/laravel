<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('country')->nullable();
        $table->text('bio')->nullable();
        $table->string('skills')->nullable(); // comma separated or use a separate table if needed
        $table->string('avatar')->nullable();
        $table->timestamps();
    });
}

   
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
