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
       Schema::create('competitions', function (Blueprint $table) {
    $table->id();

    $table->string('name');
    $table->string('email');
    $table->string('submission_title');
    $table->text('writing')->nullable();
    $table->string('file')->nullable();

    $table->date('start_date')->nullable();
    $table->string('end_date')->nullable();
    $table->string('title')->nullable();
    $table->string('prize')->nullable();
    $table->string('rank')->nullable();
$table->unsignedBigInteger('user_id')->nullable();
$table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};
