<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_desc')->nullable();
            $table->longText('content');
            $table->boolean('is_breaking_news')->default(false);
            $table->string('author');
            $table->string('slug')->unique();
            $table->boolean('status')->default(1);
            $table->string('image')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('views')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
