<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_logins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20)->unique();
            $table->string('email',40)->unique();
            $table->string('mobile',12);
            $table->date('dob',30);
            $table->string('division',25);
            $table->string('address',50);
            $table->string('gender',10);
            $table->string('password',255);  
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
        Schema::dropIfExists('user_logins');
    }
}
