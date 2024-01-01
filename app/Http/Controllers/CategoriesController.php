<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoriesRequest $request)
    {
        $data = $request->validated();
        Categories::create($data);
        return redirect()->back()->with('message', 'Category added successfully!');
    }
    public function show()
    {
        return view('admin.categories.index');
    }

    public function edit($id)
    {
        $categories = Categories::find($id);
        return view('admin.categories.edit', compact('categories'));
    }

    public function update(CategoriesRequest $request, $id)
    {
        $categories = Categories::find($id);
        $data = $request->validated();
        $categories->update($data);
        return redirect()->back()->with('message', 'Category Updated successfully!');
    }

    public function destroy(Categories $request, $id){
        $categories = Categories::find($id);
        $categories->delete();
        return redirect('/categories')->with('success','Deleted successfully!');
    }
}