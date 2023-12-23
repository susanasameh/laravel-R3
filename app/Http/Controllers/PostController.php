<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // method to store and update data
    // private $columns=[
    //     'id',
    //     'postTitle',
    //     'postDescription',
    //     'postPublished',
    //     'postAuthor',
    // ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Post::get();
        return view('postTable',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'postTitle'=>'required||string|max:50',
            'postDescription'=>'required||string',
            'postAuthor'=>'required||string',

        ]);

        $data['postPublished']=isset($request->postPublished);
        Post::create($data);
        return redirect('post');


        // $data =$request->only($this->columns);
        // $data['postPublished']=isset($request->postPublished);
        // Post::create($data);
        // return redirect('post');


        // $post=new Post();
        // $post->postTitle=$request->title;
        // $post->postDescription=$request->description;
        // $post->postAuthor=$request->author;
        // if(isset($request->published)){
        //     $post->postPublished=1;
        // }else{
        //     $post->postPublished=0;
        // }

        // $post->save();
        return "data added successfully";

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('showPost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('editPost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages=[
            'title.required'=>'العنوان مطلوب',
            'title.string'=>'Should be string',
            'description.required'=> 'should be text',
            ];

        $data=$request->validate([
            'postTitle'=>'required||string|max:50',
            'postDescription'=>'required||string',
            'postAuthor'=>'required||string',

        ], $messages);

        $data['postPublished']=isset($request->postPublished);
        Post::where('id',$id)->update($data);
        return redirect('post');
        // $data =$request->only($this->columns);
        // $data['postPublished']=isset($request->postPublished);
        // Post::where('id',$id)->update($data);
        // return redirect('post');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id',$id)->delete();
        return redirect('post');
    }

    public function trashed()
    {
        $post=Post::onlyTrashed()->get();
        return view('trashedPost',compact('post'));
    }

    public function forceDelete(string $id)
    {
        Post::where('id',$id)->forceDelete();
        return redirect('post');
    }

    public function restore(string $id)
    {
        Post::where('id',$id)->restore();
        return redirect('post');
    }


}
