<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('category_id')
                ->constrained('categories', 'id')
                ->onDelete('cascade');
            $table->string('title', 255);
            $table->string('author', 100)->default('Admin');
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'BLOCKED'])->default('PUBLISHED');
            $table->text('description')->nullable();
            $table->string('image', 191)->nullable();
            $table->timestamps();
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
