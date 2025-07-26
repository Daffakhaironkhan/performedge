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
        Schema::create('flow_handlings', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->string('users');
            $table->string('category1');
            $table->string('category2');
            $table->string('category3');
            $table->string('issue');
            $table->string('sample_inquiry');
            $table->string('flow_handling_name');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flow_handlings');
    }
};
