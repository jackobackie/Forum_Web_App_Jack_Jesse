<?php

namespace App\Http\Controllers;


use App\topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{


    public function show($id)
    {
        $topic = \App\topic::findOrFail($id);

        return view('topics.show')
            ->with('topic', $topic);
    }

    public function create()
    {
        return view('topics.create', compact('create'));
    }

    public function store()
    {
        $topics = new \App\topic();

        $topics->title = request('title');
        $topics->description = request('description');
        $topics->thread_id = auth()->id();
        $topics->save();

        return redirect('/threads');
    }


}
