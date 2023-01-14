<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\CreatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		//return view('admin/index')->with('id',$id);
		$results = Post::all();
		return view('admin.master.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('admin.master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
		//$storedata = Post::create($request->all());
		$file =  $request->file('file_name');
		$name = $file->getClientOriginalName();
		$file->move('images',$name);
		$stotedData = new Post;
		$stotedData->title = $name;
		$stotedData->body = $request->body;
		$stotedData->footer = $request->footer;
		$stotedData->user_id = 1;
		$stotedData->save();
		$url = route('app.index');
		return redirect($url);
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
		$results = Post::findOrFail($id);
		return view('admin.master.show',compact('results'));
		//return "show is working".$id;
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
		$results = Post::findOrFail($id);
		return view('admin.master.edit',compact('results'));
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
		$update = Post::findOrFail($id);
		$update->update($request->all());
		//$updateData = Post::where('id',$id)->update($request->all());
		$url = route('app.index');
		return redirect($url);
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
		$delete = Post::findOrFail($id);
		$delete->delete();
		$url = route('app.index');
		return redirect($url);
    }
}
