@extends('frontend.admin.home')

@section('content')

<div>
        <h1 class="text-center text-primary">Categories</h1>
    </div>
    <div class="col-lg-6 jumbotron mx-auto">

        <form class="form-group" method="POST" action="{{route('category_db')}}">
            @csrf
            <input type="hidden" name="a_username" class="form-control" value="zulkarnine" required/>

            <div class="form-group">
                <label class="font-weight-bolder"> Categories Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter categories_name" required/>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">Categories Description</label>
                <textarea rows="5" cols="5" class="form-control" name="description" placeholder="enter categories_description" required></textarea>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Parent Categories(Opional)</label>
                <input type="text" name="parent_id" class="form-control" placeholder="Enter parent_name"/>
            </div>


            <div class="form-group">
                <div>
                    <input class="btn-success btn-block" type="submit" name="btn" value="Save Categories Info">
                </div>
            </div>
        </form>
    </div>
@endsection