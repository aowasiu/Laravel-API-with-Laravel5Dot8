<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsheadlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsheadlines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identity')->nullable();
            $table->string('name')->nullable();
            $table->text('title')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('url')->nullable();
            $table->string('urlToImage')->nullable();
            $table->dateTime('publishedAt')->nullable();
            $table->mediumText('content')->nullable();
            $table->string('category')->nullable();
            $table->string('language')->nullable();
            $table->string('country')->nullable();
            $table->string('diskImageFileName')->nullable();
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
        Schema::dropIfExists('newsheadlines');
    }
}
