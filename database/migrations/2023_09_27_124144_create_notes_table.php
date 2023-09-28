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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->string('description', 3000);
            $table->string('customer_name');
            $table->string('customer_company');
            $table->string('customer_phone');
            $table->string('status')->default('pending');
            $table->string('observation')->nullable();
            $table->timestamps();
            $table->timestamp('saved_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('reactivated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
