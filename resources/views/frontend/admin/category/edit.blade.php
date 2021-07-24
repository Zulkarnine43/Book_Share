@extends('frontend.admin.home')

@section('content')

<div>
        <h1 class="text-center text-primary">Edit Categories</h1>
    </div>
    <div class="col-lg-6 jumbotron mx-auto">

        <form class="form-group" method="POST" action="{{route('category_edit_db')}}">
            @csrf
            <input type="hidden" name="id" class="form-control" value="{{$categorie->id}}" required/>
            <input type="hidden" name="a_username" class="form-control" value="{{$categorie->a_username}}" required/>

            <div class="form-group">
                <label class="font-weight-bolder"> Categories Name:</label>
                <input type="text" name="name" class="form-control" value="{{$categorie->name}}" required/>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">Categories Description</label>
                <textarea rows="5" cols="5" class="form-control" name="description" required>{{$categorie->description}}</textarea>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Parent Categories(Opional)</label>
                <input type="number" name="parent_id" class="form-control" value="{{$categorie->parent_id}}"/>
            </div>


            <div class="form-group">
                <div>
                    <input class="btn-success btn-block" type="submit" name="btn" value="Edit Categories Info">
                </div>
            </div>
        </form>
    </div>
@endsection