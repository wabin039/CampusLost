<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_actions', function (Blueprint $table) {
            $table->id('action_id');
            $table->foreignId('admin_id')->constrained('users', 'user_id')->onDelete('cascade');
            $table->string('action_type'); // যেমন: APPROVE_CLAIM, RESOLVE_ITEM ইত্যাদি
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_actions');
    }
};
