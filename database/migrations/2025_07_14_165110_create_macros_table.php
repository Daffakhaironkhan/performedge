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
        Schema::create('macros', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->string('users');
            $table->string('category1');
            $table->string('category2');
            $table->string('category3');
            $table->string('issue');
            $table->string('sample_inquiry');
            $table->string('action');
            $table->string('macro_name');
            $table->string('macro');
            $table->text('template');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('macros');
    }
};
