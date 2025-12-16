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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('name');                 // Tên khách hàng
            $table->string('phone');                // SĐT
            $table->string('address')->nullable();  // Địa chỉ
            $table->string('email')->nullable(); 
            $table->text('message')->nullable();    // Thông tin thêm

            $table->tinyInteger('status')
                  ->default(0)
                  ->comment('0: new, 1: processing, 2: done');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
