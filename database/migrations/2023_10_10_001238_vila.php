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
        //


        Schema::create('vila', function (Blueprint $table) {
            $table->id();
            
            $table->string('quality');
            $table->string('image');
            $table->string('branch1');
            $table->string('sellers_satis');
            $table->string('cashier_satis');
            $table->string('total_satis');
            $table->string('note');
            $table->timestamps();
        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
