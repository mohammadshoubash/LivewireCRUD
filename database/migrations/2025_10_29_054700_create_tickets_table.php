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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('priority');
            $table->string('first_category');
            $table->string('second_category');
            $table->string('third_category');
            $table->string('attachment');
            $table->string('comment');
            $table->string('customer_name');
            $table->string('customer_mobile');
            $table->string('customer_email');
            $table->string('site');
            $table->integer('anydesk_id');
            $table->string('customer_id');
            $table->integer('extension_number');
            $table->string('inquiry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
