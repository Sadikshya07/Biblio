<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_ads', function (Blueprint $table) {
            $table->id();
            $table->string('Image');
            $table->string('BookName');
            $table->string('SellerName');
            $table->bigInteger('ContactNo');
            $table->integer('Price');
            $table->string('Category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_ads');
    }
};
