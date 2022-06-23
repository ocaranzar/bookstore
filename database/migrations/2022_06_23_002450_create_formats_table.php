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
        Schema::create("formats", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name")->index();
            $table->unsignedInteger("pages");
            $table->char("isbn")->index();
            $table->date("realese_date");
            $table->unsignedInteger("book_id");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("book_id")->references("id")->on("books");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formats');
    }
};
