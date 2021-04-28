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
            $table->foreignId('platform_id')->constrained();
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
            $table->foreignId('user_id')->constrained();
            $table->foreignId('message_id')->constrained();
            $table->integer("state");
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['admin', 'client','gestor']);
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment', 20);
            $table->integer('ratingscore')->unsigned();
            $table->timestamps();
        });

        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('totalscore');
            $table->integer('nimbervotes');
            $table->integer('score');
            $table->foreignId('comment_id')->constrained();
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
            $table->foreignId('director_id')->constrained();
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
            $table->foreignId('genres_id')->constrained();
            $table->foreignId('developer_id')->constrained();
            $table->foreignId('director_id')->constrained();
            $table->foreignId('gconsoles_id')->constrained();
            $table->date('date');
            $table->foreignId('score_id')->constrained();
            $table->enum('pegi', ['3', '7','12','16','18']);
            $table->foreignId('platform_id')->constrained();
            $table->string('summary',255);
            $table->string('page_reference',255);
            $table->string('image');
            $table->foreignId('comment_id')->constrained();
            $table->timestamps();
        });

        Schema::create('sagas', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->foreignId('game_id')->constrained();
            $table->timestamps();
        });

        Schema::create('gamelists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained();
            $table->timestamps();
        });

        Schema::create('lists', function (Blueprint $table) {
            $table->id();
            $table->integer('visibility');
            $table->string('name',30);
            $table->foreignId('gamelist_id')->constrained();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained();
            $table->foreignId('list_id')->constrained();
		});
        
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
		});

        Schema::table('games', function (Blueprint $table) {
            $table->foreignId('saga_id')->constrained();
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
