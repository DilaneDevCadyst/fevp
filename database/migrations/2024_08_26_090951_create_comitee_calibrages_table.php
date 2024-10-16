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
        Schema::create('comitee_calibrages', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('title');
            $table->date('date');
            $table->string('location');
            // $table->string('duration');
            $table->boolean('status')->default(1);
            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->onDelete('cascade')
                ->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comitee_calibrages');
    }
};
