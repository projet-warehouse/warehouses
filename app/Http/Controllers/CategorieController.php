<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index ()
    {
        $cat = Categorie::orderBy('name')->get();
        // dd($cat);

        return view('admin/pages/category/category', compact(
            'cat'
        ));
    }

    public function index_add ()
    {
        // $cat_mod = Categorie::find($id);
        // dd($cat_mod);
        return view('admin/pages/category/add_category');
    }

    public function store(Request $request)
    {
        $cat_store = new Categorie();
        $cat_store->name = $request->name;
        $cat_store->save();
    
        return redirect('dashboard/category');
    }

    public function index_mod ($id)
    {
        $cat_mod = Categorie::findOrFail($id);

        return view('admin/pages/category/update_category', compact('cat_mod'));
    }

    public function update(Request $request, $id)
    {
        $category = Categorie::findOrFail($id);

        $category->name = $request->name;

        $category->save();
    
        return redirect('dashboard/category');
    }


    public function destroy($id)
    {
        $del = Categorie::findOrFail($id);

        $del->delete();

        return redirect('dashboard/category');
    }

}
