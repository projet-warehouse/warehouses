<?php

namespace App\Http\Controllers;

use App\Models\personnels;
use Illuminate\Http\Request;

class PersonnelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = personnels::latest()->paginate(10);

        return view('admin.personnels.index', compact('personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personnels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        personnels::create(array_merge($request->only('nom', 'email', 'phone'),[
            'user_id' => auth()->id()
        ]));

        return redirect()->route('admin.personnels.index')
            ->withSuccess(__('personnels created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personnels  $personnels
     * @return \Illuminate\Http\Response
     */
    public function show(personnels $personnels)
    {
        return view('admin.personnels.show', [
            'personnels' => $personnels
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personnels  $personnels
     * @return \Illuminate\Http\Response
     */
    public function edit(personnels $personnels)
    {
        return view('admin.personnels.edit', [
            'personnels' => $personnels
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\personnels  $personnels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personnels $personnels)
    {
        $personnels->update($request->only('nom', 'email', 'phone', 'fonction', 'date_embauche', 'salaire', 'adresse'));

        return redirect()->route('admin.personnels.show')
            ->withSuccess(__('personnels updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personnels  $personnels
     * @return \Illuminate\Http\Response
     */
    public function destroy(personnels $personnels)
    {
        $personnels->delete();

        return redirect()->route('admin.personnels.index')
            ->withSuccess(__('personnels deleted successfully.'));
    }
}
