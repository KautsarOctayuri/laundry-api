<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('laundry_orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('customer_id')->constrained();
        $table->foreignId('laundry_service_id')->constrained();
        $table->integer('weight');
        $table->timestamps();

        // $table->id();
        // $table->unsignedBigInteger('customer_id');
        // $table->unsignedBigInteger('service_id'); // Jangan lupa tambahkan kolom ini
        // $table->float('weight');
        // $table->float('total_price');
        // $table->timestamps();

        //     // Foreign key constraints
        // $table->foreign('customer_id')->references('id')->on('customers');
        // $table->foreign('service_id')->references('id')->on('services');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundry_orders');
    }
};
