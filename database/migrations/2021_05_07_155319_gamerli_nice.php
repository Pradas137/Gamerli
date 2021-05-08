<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GamerliNice extends Migration
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
            $table->string('name');
            $table->string('description', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('platforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('company_id')->constrained();
            $table->timestamps();
        });



        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('friend_id')->constrained();   
            $table->integer("state")->default(0);
            $table->timestamps();
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('message', 255)->nullable();
            $table->foreignId('friend_id')->constrained();
            $table->timestamps();
        });

        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('developer')->nullable();
            $table->string('director')->nullable();
            $table->string('publisher')->nullable();
            $table->foreignId('gconsoles_id')->constrained();
            $table->date('date');
            $table->enum('pegi', ['3', '7','12','16','18'])->default('3');
            $table->string('summary',255)->nullable();
            $table->string('page_reference',255)->nullable();
            $table->string('image')->nullable();
            $table->enum('validate', ['validated', 'pending','rejected'])->default('pending');
            $table->string('saga')->nullable();
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment', 255)->nullable();
            $table->integer('ratingscore')->unsigned();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('game_id')->constrained();
            $table->timestamps();
        });

          Schema::create('game_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained();
            $table->foreignId('genre_id')->constrained();
        });

        Schema::create('game_list', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained();
            $table->foreignId('list_id')->constrained();
            $table->timestamps();
        });

        Schema::create('lists', function (Blueprint $table) {
            $table->id();
            $table->integer('visibility')->default(0);
            $table->string('name',70);
            $table->foreignId('gamelist_id')->constrained();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['user', 'staff','admin'])->default('user');
            $table->foreignId('list_id')->nullable();
        });
        
        Schema::table('comments', function (Blueprint $table) {
            $table->unique(['user_id','game_id']);
        });

        Schema::table('friends', function (Blueprint $table) {
            $table->unique(['user_id','friend_id']);
        });

        Schema::table('games', function (Blueprint $table) {
            $table->foreignId('gamegenre_id')->constrained();
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
        Schema::dropIfExists('games');
        Schema::dropIfExists('gamelists');
        Schema::dropIfExists('lists');
        Schema::dropIfExists('gamegenres');
        

    }
}