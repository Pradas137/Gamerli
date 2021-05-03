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
            $table->string('description', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('platforms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('logo', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('gconsoles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->foreignId('platform_id')->constrained()->nullable();
            $table->timestamps();
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('message', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('friend_id')->constrained();
            $table->foreignId('message_id')->constrained()->nullabe();
            $table->integer("state")->default(0);
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment', 255)->nullable();
            $table->integer('ratingscore')->unsigned();
            $table->integer('like')->default(0);
            $table->timestamps();
        });

        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('totalscore');
            $table->integer('numbervotes');
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
            $table->foreignId('developer_id')->constrained()->nullable();
            $table->foreignId('director_id')->constrained()->nullable();
            $table->foreignId('gconsoles_id')->constrained();
            $table->date('date');
            $table->foreignId('score_id')->constrained()->nullable();
            $table->enum('pegi', ['3', '7','12','16','18'])->default('3');
            $table->foreignId('publisher_id')->constrained()->nullable();
            $table->string('summary',255)->nullable();
            $table->string('page_reference',255)->nullable();
            $table->string('image')->nullable();
            $table->foreignId('comment_id')->constrained()->nullable();
           
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
            $table->foreignId('game_id')->constrained()->nullable();
            $table->timestamps();
        });

        Schema::create('lists', function (Blueprint $table) {
            $table->id();
            $table->integer('visibility')->default(0);
            $table->string('name',30);
            $table->foreignId('gamelist_id')->constrained();
            $table->timestamps();
        });


        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('req_comment',255)->nullable();
            $table->foreignId('game_id')->constrained();
            $table->enum('state',['pending','accepted','canceled'])->default('pending');
            $table->foreignId('user_id_validator')->constrained()->nullable();
            $table->string('staff_comment')->constrained()->nullable();            
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['user', 'staff','admin'])->default('user');
            $table->foreignId('list_id')->nullable();
		});
        
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
		});

        Schema::table('games', function (Blueprint $table) {
            $table->foreignId('saga_id')->constrained()->nullable();
            $table->foreignId('request_id')->constrained()->nullable();
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
        Schema::dropIfExists('genres');
        Schema::dropIfExists('platforms');
        Schema::dropIfExists('gconsoles');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('friends');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('directors');
        Schema::dropIfExists('developer');
        Schema::dropIfExists('publishers');
        Schema::dropIfExists('games');
        Schema::dropIfExists('sagas');
        Schema::dropIfExists('gamelists');
        Schema::dropIfExists('lists');

    }
}
