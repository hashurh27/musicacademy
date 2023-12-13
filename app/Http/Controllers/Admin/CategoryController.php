<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryReq;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Admin.category');
    }

    public function create(CategoryReq $request)
    {
        $validatedData = $request->validated();

        $category = Category::create([
            'title' => $validatedData['title'],
            'slug'  => $validatedData['slug'],
        ]);

        
        if ($category) {
            return back()->with('success', 'Category created successfully');
        } else {
            return back()->with('failed', 'Category could not be created');
        }
    }
    public function list()
    {
        $category = Category::paginate(4);

        return view('Admin.categorylist',compact('category'));
    }

    public function edit($category_id)
    {
        $categoryid = Category::find($category_id);
        return view('Admin.categoryedit', compact('categoryid'));
    }
    
    public function update(CategoryReq $req, $category_id)
{
    $validatedData = $req->validated();

    $category = Category::find($category_id);
    $category->title = $validatedData['title'];
    $category->slug = $validatedData['slug'];
    $category->update();

    return redirect()->back()->with('success', 'Category updated');
}
    public function destroy($category_id)
    {
        $category = Category::find($category_id);

        if (!$category) {
            return redirect()->route('index.category')->with('error', 'Category not found.');
        }

        $category->delete();

        return redirect()->route('index.category')->with('success', 'Category deleted successfully.');
    }

    }

   

    

