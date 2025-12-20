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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 199);
            $table->string('code', 199);
            $table->string('slug', 255)->unique();
            $table->string('image', 255)->nullable();
            $table->tinyInteger('status')
                  ->default(1)
                  ->comment('1: active, 0: inactive');
            $table->double('price', 10, 2);
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('wing_eyelids')->nullable();
            $table->string('paint_technology')->nullable();
            $table->string('key')->nullable();
            $table->string('hinge')->nullable();
            $table->string('design')->nullable();
            $table->double('sale_price', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
