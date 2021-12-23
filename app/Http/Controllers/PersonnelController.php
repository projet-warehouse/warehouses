<?php

namespace App\Http\Controllers;

use App\Models\Ajouter;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ajouters = Ajouter::latest()->paginate(5);

        return view('Ajouter.index',compact('Ajouter'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajouters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'numero' => 'required',
            'mot de passe par defaut' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('ajouters.index')
                        ->with('success','Nouveau personnel est crée avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ajouter  $ajouter
     * @return \Illuminate\Http\Response
     */
    public function show(Ajouter $ajouter)
    {
        return view('ajouters.show',compact('ajouter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ajouter  $ajouter
     * @return \Illuminate\Http\Response
     */
    public function edit(Ajouter $ajouter)
    {
        return view('ajouters.show',compact('ajouter'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ajouter  $ajouter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ajouter $ajouter)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'numero' => 'required',
            'mot de passe par defaut' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('ajouters.index')
                        ->with('success','personnel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ajouter  $ajouter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ajouter $ajouter)
    {
        $product->delete();

        return redirect()->route('ajouters.index')
                        ->with('success','Product deleted successfully');
    }
}
