<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer as Answer;

class AnswerController extends Controller
{
    //
    public function __construct(Answer $answer)
    {
        $this->answer = $answer;
    }

    public function show()
    {
        $posts = Post::all();
        $data['posts'] = $this->post->all();
        return view('posts.index')->with('posts',$posts);
    }

    public function destroy(Request $request, $answer_id, Answer $answer)
    {
        $reply = $answer->destroy($answer_id);
        echo"record successfully deleted";
        
    }
}
