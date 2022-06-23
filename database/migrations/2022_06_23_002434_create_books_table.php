<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("books", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name")->index();
            $table->string("cover");
            $table->unsignedInteger("author_id");
            $table->unsignedInteger("publisher_id");
            $table->unsignedInteger("genre_id");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("author_id")->references("id")->on("authors");
            $table->foreign("publisher_id")->references("id")->on("publishers");
            $table->foreign("genre_id")->references("id")->on("genres");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("books");
    }
};
