<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Fleet;

class FleetController extends Controller
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
        return view('fleet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fleet = new Fleet;
        $fleet->fill($request->all());
        $fleet->save();
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
        $fleet = Fleet::findOrFail($id);
        return view('fleet.show', compact('fleet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fleet=Fleet::findOrFail($id);
        return view('fleet.edit',compact('fleet'));
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
        $fleet = Fleet::findOrFail($id);
        if($request->img != ""){
        $pic = request()->file('img');
        $pic->storeAs('public/img', $pic->getClientOriginalName());
        $fleet->img = $pic->getClientOriginalName();
        }
        $fleet->header = $request->header;
        $fleet->title = $request->title;
        $fleet->excerpt = $request->excerpt;
        $fleet->body = $request->body;
        $fleet->save();

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
