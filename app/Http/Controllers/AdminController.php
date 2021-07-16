<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
    //
    public function admin_home(){
        return view('frontend.admin.index');
    }

    public function category_add(){
        return view('frontend.admin.category.add');
    }

    public function category_db(Request $request){

        $categories = new Category();
        $categories->a_username = $request->a_username;
        $categories->name = $request->name;
        $categories->description = $request->description;

        if($request->parent_id==null){
        $categories->parent_id ='null';
        }

        $categories->parent_id = $request->parent_id;
        $categories->status = 0;
        $categories->save();
        return redirect('/admin/home')->with('msg','categories added successfully');
    }
    public function category_mng(){
        $catgories=Category::all();
        return view('frontend.admin.category.manage',compact('catgories'));
    }
}
