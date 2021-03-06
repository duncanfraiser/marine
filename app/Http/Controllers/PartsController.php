<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Parts;

class PartsController extends Controller
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
        return view('parts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parts = new Parts;
        $parts->fill($request->all());
        $parts->save();
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
        $parts = Parts::findOrFail($id);
        return view('parts.show', compact('parts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parts=Parts::findOrFail($id);
        return view('parts.edit',compact('parts'));
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
        
        $parts = Parts::findOrFail($id);
        if($request->img != ""){
        $pic = request()->file('img');
        $pic->storeAs('public/img', $pic->getClientOriginalName());
        $parts->img = $pic->getClientOriginalName();
        }
        $parts->header = $request->header;
        $parts->title = $request->title;
        $parts->excerpt = $request->excerpt;
        $parts->body = $request->body;
        $parts->save();

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
