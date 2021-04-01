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
            $table->text('imdbID');
            $table->string('type')->nullable();
            $table->date('published_at')->nullable()->index();
            $table->text('poster')->nullable();
            $table->text('rating')->nullable();
            $table->text('genre')->nullable();
            $table->text('director')->nullable();
            $table->text('writer')->nullable();
            $table->text('actor')->nullable();
            $table->text('plot')->nullable();
            $table->text('language')->nullable();
            $table->text('country')->nullable();
            $table->text('awards')->nullable();
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
