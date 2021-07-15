<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books_db;

class BooksController extends Controller
{
    public function show()
    {
    	
    	return view('frontend.pages.books.show');
    }

   public function upload_book(){
        return view('frontend.pages.books.upload');
    }

        public function upload_book_db(Request $request){

        $addBook = new books_db(); 

        $bookImage = $request->file('book_image');
        if ($bookImage) {
            $currentTimeinSeconds = time();  
            $imageName =  $currentTimeinSeconds.'.'.$bookImage->getClientOriginalName();
            $directory = 'book_images/';
            $imageUrl = $directory.$imageName;
            
            $bookImage->move($directory, $imageName);
        }
        
        $bookPdf = $request->file('book_pdf');
        if ($bookPdf) {
            $currentTimeinSeconds = time(); 
            $pdfName = $currentTimeinSeconds.'.'.$bookPdf->getClientOriginalName();
            $directory = 'book_pdf/';
            $book_Pdf = $directory.$pdfName;
            $bookPdf->move($directory, $pdfName);
        }

        $addBook->usr_name = $request->usr_name;
        $addBook->book_name = $request->book_name;
        $addBook->cat_type = $request->cat_type;
        $addBook->book_description = $request->book_description;
        $addBook->book_image = $imageUrl;
        $addBook->pdf_upload = $book_Pdf;
        $addBook->status =1;
        $addBook->save();

        return redirect('/');
    }
    public function dwnlod_book($id){
        $data=books_db::find($id);
        unlink($data->pdf_upload);
    }
}
