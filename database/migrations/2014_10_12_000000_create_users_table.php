<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('funcao');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(['name'=>'Fabiano Monteiro','email'=>'fabiano.a.monteiro@hotmail.com','password'=>Hash::make('010574'), 'funcao' => 'administrador']);
        DB::table('users')->insert(['name'=>'Jair Rockunback','email'=>'jair412010@hotmail.com','password'=>Hash::make('91055689'), 'funcao' => 'administrador']);
        DB::table('users')->insert(['name'=>'Funcionário','email'=>'jfpecas28@hotmail.com','password'=>Hash::make('jfpecas28'), 'funcao' => 'funcionario']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
