<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksDbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_dbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usr_name',20);
            $table->string('book_name',35);
            $table->string('cat_type',10);
            $table->string('book_description',25);
            $table->string('book_image',150);
            $table->string('pdf_upload',150);
            $table->string('status',15);
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
        Schema::dropIfExists('books_dbs');
    }
}
