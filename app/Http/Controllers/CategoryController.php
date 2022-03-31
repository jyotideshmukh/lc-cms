<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatogoriesRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    //

    public function index(){
        //dd(Category::all());
        return view('category.index')->with('categories',Category::all());
    }

    public function create(){
        //dd(Category::all());
        return view('category.create');
    }

    public function store(CatogoriesRequest $request){
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();
        return redirect('/category')->with(['status'=>'Category created successfully']);

    }

    public function edit(Category $category,Request $request){
        return view('category.edit')->with(['category'=>$category]);
    }

    public function update(Category $category,Request $request){
        //dd($category);
        $request->validate([
            'name'=>[
                'required',
                Rule::unique('categories')->ignore($category->id),
                'min:4',
                'max:255']
        ]);
        $category->name = $request->get('name');
        $category->save();
        return redirect('/category')->with(['status'=>'Category updated successfully']);

    }

    public function destroy(Category $category){
        $category->delete();
        return redirect("/category")->with('status', 'Category deleted successfully');
    }



}
