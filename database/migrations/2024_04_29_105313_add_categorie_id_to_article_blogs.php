<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategorieIdToArticleBlogs extends Migration
{
    public function up()
    {
        Schema::table('article_blogs', function (Blueprint $table) {
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('article_blogs', function (Blueprint $table) {
            $table->dropForeign(['categorie_id']);
            $table->dropColumn('categorie_id');
        });
    }
};
