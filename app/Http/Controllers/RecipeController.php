<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Appetizers = Recipe::where('category', 'Appetizers')->get();
        $SoupsSalads = Recipe::where('category', 'SoupsSalads')->get();
        $Entrees = Recipe::where('category', 'Entrees')->get();
        $Sides = Recipe::where('category', 'Sides')->get();
        $Desserts = Recipe::where('category', 'Desserts')->get();
        $PartyFoods = Recipe::where('category', 'PartyFoods')->get();
        return view('recipe.index', compact('Appetizers' ,'SoupsSalads' ,'Entrees' ,'Sides' ,'Desserts' ,'PartyFoods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipe;
        $recipe->fill($request->all());
        $recipe->save();
        return redirect('/recipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::FindOrFail($id);
        return view('recipe.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::FindOrFail($id);
        return view('recipe.edit', compact('recipe'));
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
        $recipe = Recipe::FindOrFail($id);
        $recipe->fill($request->all());
        $recipe->save();
        return redirect('recipe');
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
