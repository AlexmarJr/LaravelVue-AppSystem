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
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('bank')->nullable();
            $table->string('bankAccount')->nullable();
            $table->string('agency')->nullable();
            $table->json('pixKeys')->nullable();
            $table->json('extract')->nullable();
            $table->json('meta')->nullable();
            $table->json('favorits')->nullable();
            $table->decimal('balance',19,4)->default(0);
            $table->json('investiments')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
