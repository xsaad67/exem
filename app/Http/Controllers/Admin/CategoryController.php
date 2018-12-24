<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::withCount('posts')->pageinate(5);
    	return $categories;
    	return view('admin.categories.a_category_index',compact("categories"));
    }

    public function create()
    {
    	return view('admin.categories.a_category_create');
    }

    public function edit(Category $category)
    {
    	return $category;

    	return view('admin.categories.a_category_edit',compact("categories"));
    }


    public function update(Category $category, Request $request)
    {
		    	
    }

    public function delete(Category $category)
    {
    	
    }

}
