<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//Dit is de thread controller file. Hier zorgen we ervoor dat er een thread word gemaakt word laten zien en word opgeslagen



class ThreadsController extends Controller

{
    public function index()
    {
        $threads = \App\thread::all();
        return view('threads.index', compact('threads'));
    }


    //hier creeren we een thread
    public function create()
    {


        return view('threads.create', compact('create'));
    }

    //hier slaan we een thread op
    public function store()
    {
        $threads = new \App\thread();

        $threads->title = request('title');
        $threads->description = request('description');
        $threads->user_id = auth()->id();
        $threads->save();

        return redirect('/threads');
    }

    //hier laten we een thread zien
    public function show($id)
    {
        $thread = \App\thread::findOrFail($id);

        return view('threads.show')
            ->with('thread', $thread);
    }
}
