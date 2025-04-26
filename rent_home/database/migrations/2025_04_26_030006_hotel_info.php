<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hotel_info', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->String('name');
            $table->String('phone');
            $table->date('check_in');
            $table->string('note');
            // $table->foreignId('pay_method')->constrained('payment_method');
            $table->integer('pay_method');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_info');
    }
};
