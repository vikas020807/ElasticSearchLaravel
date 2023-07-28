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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->text('title')->fulltext();
            $table->text('content')->fulltext();
            $table->text('author')->fulltext();
            $table->timestamps();
        });
        // \Illuminate\Support\Facades\DB::statement('ALTER TABLE news ADD FULLTEXT (title, content, author)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
