<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('test_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_type_id');
            $table->foreignId('package_category_id');

            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->string('theme');
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->mediumText('comment')->nullable();
            $table->boolean('is_public')->default(false);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_packages');
    }
};
