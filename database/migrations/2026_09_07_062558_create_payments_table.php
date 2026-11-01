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
        Schema::create('payments', function (Blueprint $table) {
                    $table->id();

            $table->unsignedBigInteger('order_id');
            $table->integer('amount');
            $table->string('payment_method');
            $table->string('payment_status');

            $table->string('card_id')->nullable();
            $table->string('card_holder')->nullable();
            $table->string('card_exp')->nullable();
            $table->integer('cvv')->nullable();
            $table->string('address')->nullable();

            $table->foreign('order_id')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
