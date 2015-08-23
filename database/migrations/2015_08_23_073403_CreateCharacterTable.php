<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age')
                ->nullable();
            $table->enum('gender', ['male', 'female', 'undisclosed'])
                ->default('undisclosed');
            $table->integer('speed')
                ->default(5)
                ->unsigned();
            $table->longText('description')
                ->nullable();
            $table->integer('user_id')
                ->nullable()
                ->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('characters');
    }
}
