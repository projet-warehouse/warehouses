<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class bannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/pages/banner')
         ->with('banner', Banner::all()
                // //  ->orderBy('updated_at', 'DESC')
                 ->last()
                 );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
            $request->validate([
                'titre' => 'required',
                'description' => 'required',
                'lien-href' => 'required',
                'lien-text' => 'required',
                'image' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
            ]);
    
            $newImageName = uniqid() . '.' . $request->image->extension();
    
            $request->image->move(public_path('images'), $newImageName);
    
            Banner::create([
                'titre' => $request->input('titre'),
                'description' => $request->input('description'),
                'lien-href' => $request->input('lien-href'),
                'lien-text' => $request->input('lien-text'),
                'couleur' => 'null',
                'image' => $newImageName,
            ]);
            
            return redirect('/banner');
                //  ->with('banner', Banner::all()
                // //  ->orderBy('updated_at', 'DESC')
                //  ->last()
                //  );
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
