<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("books", function (Blueprint $table) {
            $table->id();
            $table->string("cover");
            $table->string("name", 50);
            $table->unsignedSmallInteger("pages");
            $table->char("isbn", 13);
            $table->date("release_date");
            $table->foreignId("genre_id");
            $table->foreignId("writer_id");
            $table->foreignId("publisher_id");
            $table->foreignId("mediatype_id");
            $table->timestamps();
            $table->softDeletes();

            $table->unique("name");
            $table->unique("isbn");
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
