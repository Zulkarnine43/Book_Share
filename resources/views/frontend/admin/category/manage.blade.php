@extends('frontend.admin.home')

@section('content')
<div class="row flex-sm-row">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Manage categories Info</h3>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr>
                    <th>Sl No</th>
                    <th>a_username</th>
                    <th>categories_name </th>
                    <th>categories_description </th>
                    <th>Categories parent_id </th>
                    <th>categories_status </th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($catgories as $categorie)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$categorie->a_username}}</td>
                    <td>{{$categorie->name}}</td>
                    <td>{{$categorie->description}}</td>
                    <td>{{$categorie->parent_id}}</td>
                    <td>{{$categorie->status}}</td>
                    <td>
                    <a href="{{route('category.edit',['id'=>$categorie->id])}}" onclick="return confirm('Are you sure you want to edit?');" class="btn btn-success"><i class="fas fa-edit"></i></a>
                    <a href="{{route('category.delete',['id'=>$categorie->id])}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger "><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>


@endsection()