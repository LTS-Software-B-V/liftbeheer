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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->date('plan_date')->nullable();
            $table->integer('status_id')->nullable();
            $table->date('execution_date')->nullable();
            $table->longtext('remark')->nullable();
            $table->longtext('attachment')->nullable();
            $table->foreignId('elevator_id')->references('id')->on('elevators')->nullable();
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
