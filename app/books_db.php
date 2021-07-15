<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books_db extends Model
{
    //
      protected $fillable = ['usr_name','book_name','cat_type','book_description','book_image','pdf_upload','status'];
}
