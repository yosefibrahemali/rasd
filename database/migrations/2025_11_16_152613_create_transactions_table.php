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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            // المستخدم المرسل
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');

            // المستلم
            $table->unsignedBigInteger('recipient_id')->nullable(); // يمكن أن يكون unknown
            $table->foreign('recipient_id')->references('id')->on('users')->onDelete('set null');

            // بيانات المعاملة المالية
            $table->decimal('amount', 15, 2); // المبلغ بدقة عالية
            $table->string('currency', 3)->default('LYD'); // العملة، مثال: LYD, USD
            $table->string('transaction_type')->default('transfer'); // نوع المعاملة: transfer, deposit, withdrawal
            $table->string('status')->default('pending'); // الحالة: pending, completed, blocked

            // بيانات إضافية للمراقبة والتحليل
            $table->integer('risk_score')->nullable(); // درجة المخاطرة (0-100)
            $table->string('risk_action')->nullable(); // ALLOW / CHALLENGE / BLOCK
            $table->time('transaction_hour'); // توقيت المعاملة

            // وصف إضافي للمعاملة
            $table->text('description')->nullable();

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
