<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;
class PostsController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /* $posts = Post::all();
        $data['posts'] = $this->post->all();
        return view('posts.index')->with('posts',$posts); */
        $data = [];
        $data['posts'] = $this->post->all();
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        //
        $data = [];
        $data['title'] = $request->input('title');
        $data['body'] = $request->input('description');

        if ( $request->isMethod('post') )
        {
            $this->validate($request, 
            [
                'title' => 'required',
                
            ]
        );
            $post->insert($data);
            return redirect('posts');
        }
        
        return view('posts.new', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        //
        $data = [];
        $data['post_id'] = $post_id;
        $post = $this->post->with('answers')->findOrFail($post_id);
        $data['post'] = $post;
        $data['answers'] = $post->answers;
        $data['count'] = count($data['answers']);
        
        return view('posts.post', $data);
      
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
    public function destroy(Post $post, $post_id)
    {
        //
        $data = [];
        $data['posts']= $this->post->destroy($post_id); 
        return redirect('posts');
    }

    
}
