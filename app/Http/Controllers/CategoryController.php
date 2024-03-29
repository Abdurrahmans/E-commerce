<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function addCategory()
  {
      return view('admin.category.add-category');
  }

  public function newCategory(Request $request){

//different type of data insert in the database table

//      first way data insert

//      DB:: table('categories')->insert([
////          'cat_name' =>$request->cat_name,
////          'cat_desc' =>$request->cat_desc,
////          ' status '  =>$request->status
////      ]);
////      return success;
//
      //two way insert data

//      Category::create($request->all());


//      theree way data insert

      $category = new Category();
      $category->cat_name = $request->cat_name;
      $category->cat_desc = $request->cat_desc;
      $category->status = $request->status;
      $category->save();


      return redirect('/category/add')->with('message','Category Added Successfully');
  }
 public function manageCategory(){

      $categories = Category::all();

      return view('admin.category.manage-category',['categories'=>$categories]);

 }

 public function publishedCategory($id){

      $category = Category::find($id);
      $category->status = 0;
      $category->save();

      return redirect('/category/manage');
 }
    public function unpublishedCategory($id){

        $category = Category::find($id);
        $category->status = 1;
        $category->save();

        return redirect('/category/manage');
    }
}
