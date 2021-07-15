@extends('frontend.layouts.app')
@section('content')

   <section class="my-5">

    <h5 class="text-center text-success"></h5>
    
    <div class="col-lg-7 jumbotron mx-auto mt-5">
          
        <form method="POST" action="{{route('upload_book_db')}}" enctype="multipart/form-data">
            @csrf

             <div>
                <h1 class="text-center">Import Here</h1>
            </div>

            <div class="form-group">
                <input type="hidden" name="usr_name" class="form-control" value="{{Session::get('u_name')}}"/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Book Name</label>
                <input type="text" name="book_name" class="form-control" placeholder="book name" required>
               <!--  <span>{{$errors->has('crop_name') ? $errors->first('crop_name'): ' '}}</span> -->
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">Categories Type</label>
                <select class="form-control" name="cat_type" required>
                    <option>---Select Book Type</option>
                    <option value="1">1</option> 
                     <option value="2">2</option> 
                </select>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">Book Description</label>
                <textarea  class="form-control" name="book_description" placeholder="book description here" required></textarea>
                <!-- <span>{{$errors->has('crop_description') ? $errors->first('crop_description'): ' '}}</span> -->
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Add Book image-</label><br>
                <input type="file" name="book_image" accept="image/*" required>
                <!-- <span>{{$errors->has('crop_image') ? $errors->first('crop_image'): ' '}}</span> -->
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Add Book Pdf-</label><br>
               <input type="file" name="book_pdf" accept="application/pdf" />
            </div>
            <div class="form-group">
                <div class="">
                    <input class="btn btn-primary btn-block" type="submit" name="btn" value="Save Book Info">
                </div>
            </div>
        </form>
    </div>

   </section>


@endsection
