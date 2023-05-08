<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('email', length: 255)->nullable(value: false)->unique( indexName: 'email');
            $table->string('username', length: 255)->nullable( value: false)->unique( indexName: 'username');
            $table->string('surname', length: 63)->nullable( value: false);
            $table->string('name', length: 63)->nullable( value: false);
            $table->string('middlename', length: 63)->nullable( value: false);
            $table->integer('passportseries')->nullable( value: false);
            $table->integer('passportnumber')->nullable( value: false);
            $table->string('password', length: 255)->nullable( value: false);
            $table->string('remember_token', length: 100)->nullable( value: true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
