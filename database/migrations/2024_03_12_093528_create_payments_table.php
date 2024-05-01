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
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('payment_module_id')->nullable();
            $table->text('reference_number')->nullable();
            $table->boolean('is_processed')->default(0);
            $table->text('payment_method')->nullable();
            $table->decimal('amount',10,2)->nullable();
            $table->decimal('checkout_amount',10,2)->nullable();
            $table->decimal('old_balance',10,0)->nullable();
            $table->text('payment_details')->nullable();
            $table->text('payment_post_status')->nullable();
            $table->text('status')->nullable();
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
