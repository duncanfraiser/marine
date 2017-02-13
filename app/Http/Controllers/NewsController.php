<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{

    public function __construct(){
        $this->middleware('user')->except('index', 'show');
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
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $this->validate($request,[
                'title' => 'required',
                'type' => 'required',
                'img' => 'required',
                'excerpt' => 'required',
                'body' => 'required',
                ]);


        // The storeAs() is defaulted to save in storage/app/public/img (I added the img extintion), to make the stored files accesable to the public you have to use the php artisan storage:link to Create a symbolic link from "public/storage" to "storage/app/public" then you can source an image as follows ergonmarine.df.ercorr.com/storage/pics/pic.png. The storAs() passes 2 arguments (path,filename) methods are located on UploadedFile.php;
        $pic = request()->file('img');
        $pic->storeAs('public/img', $pic->getClientOriginalName());
        $news = new News;
        $news->title = $request->title;
        $news->type = $request->type;
        $news->excerpt = $request->excerpt;
        $news->body = $request->body;
        $news->img = $pic->getClientOriginalName();
        $news->save();

        return redirect('/news/'.$news->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::FindOrFail($id);
        $newses = News::where('type','News')->orderBy('created_at', 'desc')->latest()->get(); 
        $specials = News::where('type','Specials')->orderBy('created_at', 'desc')->latest()->get(); 

        return view('news.show', compact('news', 'newses', 'specials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
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
        $news = News::findOrFail($id);
        if($request->img != ""){
        $pic = request()->file('img');
        $pic->storeAs('public/img', $pic->getClientOriginalName());
        $news->img = $pic->getClientOriginalName();
        }
        $news->title = $request->title;
        $news->excerpt = $request->excerpt;
        $news->body = $request->body;
        $news->save();

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
        $news = News::findOrFail($id);
        $news->delete();
        return redirect('/');
    }

    public function homeshow($id){
        
    }
}
