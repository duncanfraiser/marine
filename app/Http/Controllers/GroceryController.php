<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Grocery;

class GroceryController extends Controller
{
    public function __construct(){
        $this->middleware('admin')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grocery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grocery = new Grocery;
        $grocery->fill($request->all());
        $grocery->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $grocery = Grocery::findOrFail($id);
         return view('grocery.show', compact('grocery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grocery=Grocery::findOrFail($id);
        return view('grocery.edit',compact('grocery'));
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
        $grocery = Grocery::findOrFail($id);
        if($request->img != ""){
        $pic = request()->file('img');
        $pic->storeAs('public/img', $pic->getClientOriginalName());
        $grocery->img = $pic->getClientOriginalName();
        }
        $grocery->title = $request->title;
        $grocery->body = $request->body;
        $grocery->save();

        return redirect('/');
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
