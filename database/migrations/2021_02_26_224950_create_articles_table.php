<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->text('body')->nullable();

            $table->integer('count_views')->default(0);
            $table->string('image')->default('default.jpg');
            $table->string('category')->default('activities');

            $table->bigInteger('mycategory_id')->unsigned()->nullable();
            $table->foreign('mycategory_id')->references('id')->on('article_categories')->onDelete('set null');


            $table->integer('is_valid')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
