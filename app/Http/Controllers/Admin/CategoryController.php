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
    	$categories = Category::all();
    	return $categories;
    	return view('admin.categories.a_category_index',compact("categories"));
    }

}
