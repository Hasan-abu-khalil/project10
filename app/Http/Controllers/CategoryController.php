<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        $categorys = Category::all();
        return view('home', compact('categorys', 'products'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();

        return view('admin_dasebord\admin_categorys_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a new category with the form data
        $category = new Category();
        $category->name = $request->input('name');
        $category->image = $request->input('image');

        $category->save();


        $categoryId = $category->id;

        return redirect()->route('admin_categorys.show', ['admin_category' => $categoryId])->with('success', 'Category created successfully');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categorys = Category::all();
        return view('admin_dasebord\admin_categorys', compact('categorys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $admin_category)
    {
        return view('admin_dasebord.admin_categorys_edit', compact('admin_category'));
    }

    public function update(Request $request, Category $admin_category)
    {
        $admin_category->update([
            'name' => $request->input('name'),
            'image' => $request->input('image'),

        ]);

        return redirect()->route('admin_categorys.show', ['admin_category' => $admin_category->id])->with('success', 'Category updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin_categorys.show', ['admin_category' => $id])->with('success', 'Category deleted successfully');
    }

}
