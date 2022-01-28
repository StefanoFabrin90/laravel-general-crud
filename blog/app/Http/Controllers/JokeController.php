<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

// step 1
use App\joke;

class JokeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jokes = joke::all();  //step 2
        //dump($jokes);

        return view('jokes.index', compact('jokes')); //step 3
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jokes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //step 4 
        $data = $request->all();
        dump($data);

        $joke = new joke(); //row vuota

        //step 5
        // $joke->title = $data['title'];
        // $joke->slug = Str::slug($data['title'], '-');
        // $joke->author = $data['author'];
        // $joke->body = $data['body'];
        // $joke->vote = $data['vote'];

        $data['slug'] = Str::slug($data['title'], '-');
        $joke->fill($data);

        // save = step 6
        $joke->save();

        return redirect()->route('jokes.show', $joke->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //step 7
        $joke = joke::find($id);
        //dump($joke);

        if ($joke) {
            return view('jokes.show', compact('joke'));
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $joke = joke::find($id);
        //dump($joke);

        //$joke['slug'] = Str::slug($joke['title'], '-');
        return view('jokes.edit', compact('joke'));
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
        $joke = $request->all();
        //dump($joke);

        $new_joke = joke::find($id);

        $new_joke->update($joke);

        return redirect()->route('jokes.show', $new_joke->id);
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
