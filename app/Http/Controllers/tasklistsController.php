<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tasklists;

class tasklistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tasklists = tasklists::all();

        return view('tasklists.index', [
            'tasklists' => $tasklists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $tasklists = new tasklists;

        return view('tasklists.create', [
            'tasklists' => $tasklists,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $tasklists = new tasklists;
        $tasklists->content = $tasklists->content;
        $tasklists->save();

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
        $tasklists = tasklists::find($id);

        return view('tasklists.show', [
            'tasklists' => $tasklists,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tasklists = tasklists::find($id);

        return view('tasklists.edit', [
            'tasklists' => $tasklists,
        ]);
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
         $tasklists = tasklists::find($id);
        $tasklists->content = $tasklists->content;
        $tasklists->save();

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
        $tasklists = tasklists::find($id);
        $tasklists->delete();

        return redirect('/');
    }
}
