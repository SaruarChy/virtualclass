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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notnull();
            $table->string('email', 255)->notnull()->unique();
            $table->string('designation')->notnull();
            $table->string('department')->notnull();
            $table->string('phone')->notnull();
            $table->string('image')->nullable();
            $table->date('joinDate')->nullable();
            $table->date('resignDate')->nullable();
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
        Schema::dropIfExists('teachers');
    }
};
