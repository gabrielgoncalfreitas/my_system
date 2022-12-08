<?php

namespace App\Http\Controllers\Workers;

use App\Http\Controllers\Controller;
use App\Models\Genders;
use App\Models\Languages;
use App\Models\Religions;
use App\Models\Titles;
use App\Models\Workers;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $workers = Workers::all()->sortBy('id');
        $alert   = $request->session()->pull('workers.alert');

        return view('workers.index', compact([
            'workers', 'alert',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titles    = Titles::select('description')->get()->sortBy('description');
        $genders   = Genders::select('description')->get()->sortBy('description');
        $languages = Languages::select('description')->get()->sortBy('description');
        $religions = Religions::select('description')->get()->sortBy('description');

        return view('workers.create', compact([
            'titles', 'genders', 'languages', 'religions'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Workers $workers)
    {
        $workers->fill($request->except(['_token']));
        $workers->save();

        $request->session()->put('workers.alert', 'created');

        return redirect(route('workers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function show(Workers $workers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function edit(Workers $workers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workers  $workers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workers $workers)
    {
        //
    }

    public function delete($id, Request $request)
    {
        if (!empty(Workers::find($id))) Workers::where('id', $id)->delete();

        $request->session()->put('workers.alert', 'deleted');

        return redirect(route('workers.index'));
    }
}
