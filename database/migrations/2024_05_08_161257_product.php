<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_id', 5)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('fake_price', 20)->nullable();
            $table->string('price', 20)->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->string('color', 10)->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_detail')->nullable();
            $table->longText('description_technique')->nullable();
            $table->string('brand', 50)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('deleted')->nullable();
            $table->integer('sum')->nullable();
            $table->string('sub_category_id', 5)->nullable();
        });
    }

    public function down(): void
    {
        Shema::dropIfExists('product');
    }
};
