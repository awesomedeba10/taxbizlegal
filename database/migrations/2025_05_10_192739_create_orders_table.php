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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->string('cus_name');
            $table->string('cus_email');
            $table->string('cus_phone');
            $table->string('cus_state');
            $table->string('service_name')->nullable();
            $table->string('service_plan_name')->nullable();
            $table->decimal('service_price', 10, 2)->nullable();
            $table->string('current_stage')->default('basic_details_submitted'); // optional default
            $table->string('rzp_order_id')->nullable();
            $table->timestamp('rzp_order_created_at')->nullable();
            $table->string('rzp_payment_id')->nullable();
            $table->decimal('rzp_paid_amt', 10, 2)->nullable();
            $table->string('rzp_payment_status')->nullable();
            $table->timestamp('rzp_payment_created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
