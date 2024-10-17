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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title1'); // title1
            $table->text('description1'); // description1
            $table->text('description2'); // description2
            $table->string('title2'); // title2
            $table->text('description3'); // description4
            $table->integer('likes')->default(0); // 0 likes
            $table->integer('comments_count')->default(0); // 0 Comment count
            $table->integer('views')->default(0); // 0 Views
            $table->decimal('price', 8, 2); // Price
            $table->string('img1')->nullable(); // img1 (first image)
            $table->string('img2')->nullable(); // img2 (second image)

            // add Class
            $table->string('title_class1')->nullable();
            $table->string('description_class1')->nullable();
            $table->string('description_class2')->nullable();
            $table->string('title_class2')->nullable();
            $table->string('description_class3')->nullable();

            $table->string('likes_class')->nullable();
            $table->string('comments_class')->nullable();
            $table->string('views_class')->nullable();
            $table->string('price_class')->nullable();

            $table->string('img_class1')->nullable();
            $table->string('img_class2')->nullable();

            $table->boolean('allow_comments')->default(true); // Default to allowing comments
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
