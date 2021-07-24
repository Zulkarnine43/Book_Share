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
    public function category_edit($id){
        $categorie=Category::find($id);
        return view('frontend.admin.category.edit',compact('categorie'));
    }

    public function category_edit_db(Request $request){

        $categories = Category::find($request->id);
        $categories->a_username = $request->a_username;
        $categories->name = $request->name;
        $categories->description = $request->description;

        if($request->parent_id==null){
        $categories->parent_id ='null';
        }

        $categories->parent_id = $request->parent_id;
        $categories->status = 0;
        $categories->save();
        return redirect('/admin/home')->with('msg','categories edit successfully');
    }
    public function category_delete($id){
        $categorie=Category::find($id);
        $categorie->delete();
        return redirect('/admin/home')->with('msg','categories delete successfully');
    }
}
