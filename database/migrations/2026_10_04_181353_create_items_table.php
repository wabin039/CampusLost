<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('item_id');

            // Foreign Keys linking with custom primary keys
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories', 'category_id')->onDelete('cascade');
            $table->foreignId('location_id')->constrained('locations', 'location_id')->onDelete('cascade');

            $table->enum('type', ['LOST', 'FOUND']);
            $table->string('item_name');
            $table->string('brand')->nullable();
            $table->string('color')->nullable();
            $table->text('description');
            $table->date('event_date');
            $table->string('image')->nullable();

            $table->enum('status', ['ACTIVE', 'CLAIMED', 'RESOLVED'])->default('ACTIVE');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
