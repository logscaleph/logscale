<?php

namespace App\Http\Controllers;

use App\Http\Models\Entry;
use App\Http\Requests\EntryRequest;
use App\Http\Resources\EntryResource;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Entry::all()->except();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntryRequest $request)
    {
        $entry = Entry::create($request->all());

        return new EntryResource($entry);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entry  $entry
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
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(EntryRequest $request, $id)
    {
        $entry = Entry::findOrFail($id);

        $entry->fill($request->all())->save();

        return new EntryResource($entry);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = Entry::findOrFail($id);

        try {
            $entry->delete();

            return [
                'message' => 'Entry removed.'
            ];
        } catch (\Exception $e) {

        }
    }
}
