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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('app_type');
            $table->string('platform')->nullable();
            $table->string('business_name');
            $table->text('business_details');
            $table->text('app_description');
            $table->string('email');
            $table->string('phone');
            $table->enum('has_domain', ['yes', 'no']);
            $table->string('domain_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
