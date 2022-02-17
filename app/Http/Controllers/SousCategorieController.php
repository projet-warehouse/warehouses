<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Sous_categorie;

class SousCategorieController extends Controller
{
    public function index ()
    {

        $cat = Sous_categorie::where('categorie_id','!=', null)->get('id');
        // dd($cat);
        // $test = $cat->id;
        
        dd($cat);
        // $cat = Sous_categorie::find(1);
        

        // return view('admin/pages/sous_category/sous_category');
        return view('admin/pages/sous_category/sous_category', compact(
            'cat'
        ));
        // $comment = Comment::find(1);
        // return 
    }

    public function index_add ()
    {
        $cat_select = Categorie::all();

        return view('admin/pages/sous_category/add_sous_category', compact('cat_select'));
    }

    public function store(Request $request)
    {
        $cat_store = new Sous_categorie();
        $cat_store->name = $request->name;
        $cat_store->categorie_id = $request->categorie;
        $cat_store->save();
    
        return redirect('dashboard/sous_category');
    }

    // public function index_mod ($id)
    // {
    //     $sous_cat_mod = Sous_categorie::findOrFail($id);

    //     return view('admin/pages/sous_category/update_sous_category', compact('cat_mod'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $category = Sous_categorie::findOrFail($id);

    //     $category->name = $request->name;

    //     $category->save();
    
    //     return redirect('dashboard/sous_category');
    // }


    // public function destroy($id)
    // {
    //     $del = Sous_categorie::findOrFail($id);

    //     $del->delete();

    //     return redirect('dashboard/sous_category');
    // }
}
