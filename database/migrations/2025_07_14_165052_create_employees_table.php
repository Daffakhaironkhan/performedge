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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('id_finger');
            $table->string('nama');
            $table->string('team_leader');
            $table->string('supervisor');
            $table->string('level');
            $table->string('program');
            $table->date('ttl');
            $table->integer('age');
            $table->date('join_date');
            $table->integer('tenure');
            $table->text('alamat');
            $table->string('gender');
            $table->string('email');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
