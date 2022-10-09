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
        Schema::create("users", function (Blueprint $table) {
            $table->id();
            $table->string("first_name", 25);
            $table->string("last_name", 25);
            $table->string("username", 25);
            $table->string("email", 50);
            $table->timestamp("email_verified_at")->nullable();
            $table->string("password")->nullable();
            $table->foreignId("role_id");
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->unique("username");
            $table->unique("email");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("users");
    }
};
