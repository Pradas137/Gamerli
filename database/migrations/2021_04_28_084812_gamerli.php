<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gamerli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('description', 255);
            $table->timestamps();
        });

        Schema::create('platforms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->timestamps();
        });

        Schema::create('gconsoles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->timestamps();
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('message', 255);
            $table->timestamps();
        });

        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->string('message', 255);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('message_id')->references('id')->on('messages');
            $table->integer("state");
            $table->timestamps();
        });
        
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment', 20);
            $table->integer('ratingscore', 11);
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('totalscore', 11);
            $table->integer('nimbervotes', 11);
            $table->integer('score', 11);
            $table->foreign('comment_id')->references('id')->on('comments');
            $table->timestamps();
        });

        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->timestamps();
        });

        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->foreign('director_id')->references('id')->on('directors');
            $table->timestamps();
        });

        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->timestamps();
        });

        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->foreign('genres_id')->references('id')->on('genres');
            $table->foreign('developer_id')->references('id')->on('developers');
            $table->foreign('director_id')->references('id')->on('directors');
            $table->foreign('gconsole_id')->references('id')->on('gconsoles');
            $table->date('date');
            $table->foreign('score_id')->references('id')->on('scores');
            $table->enum('pegi');
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->string('summary',255);
            $table->foreign('saga_id')->references('id')->on('sagas');
            $table->string('page_reference',255);
            $table->string('image');
            $table->foreign('comment_id')->references('id')->on('comments');
            $table->timestamps();
        });

        Schema::create('sagas', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->foreign('game_id')->references('id')->on('games');
            $table->timestamps();
        });

        Schema::create('gamelists', function (Blueprint $table) {
            $table->id();
            $table->foreign('game_id')->references('id')->on('games');
            $table->timestamps();
        });

        Schema::create('lists', function (Blueprint $table) {
            $table->id();
            $table->integer('visibility');
            $table->string('name',30);
            $table->foreign('glist_id')->references('id')->on('gamelists');
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
        //
        Schema::dropIfExists('genre');
        Schema::dropIfExists('platform');
        Schema::dropIfExists('gconsoles');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('friends');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('directors');
        Schema::dropIfExists('developer');
        Schema::dropIfExists('publisher');
        Schema::dropIfExists('game');
        Schema::dropIfExists('sagas');
        Schema::dropIfExists('gamelist');
        Schema::dropIfExists('list');

    }
}
