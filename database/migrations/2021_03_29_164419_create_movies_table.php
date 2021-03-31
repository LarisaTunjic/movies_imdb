<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('title');
            $table->integer('imdbID');
            $table->string('type');
            $table->date('published_at')->nullable()->index();
            $table->text('poster');
            $table->text('rating');
            $table->text('genre');
            $table->text('director');
            $table->text('writer');
            $table->text('actor');
            $table->text('plot');
            $table->text('language');
            $table->text('country');
            $table->text('awards');
            $table->text('dvd');
            $table->text('boxOffice');
            $table->text('production');
            $table->text('webSite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
