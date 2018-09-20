<?php

namespace App\Http\Controllers;

use App\Http\Models\EntryDetail;
use App\Http\Requests\EntryDetailRequest;
use App\Http\Resources\EntryDetailResource;
use Illuminate\Http\Request;

class EntryDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(EntryDetailRequest $request)
    {
        $entryDetail = EntryDetail::create($request->all());

        return new EntryDetailResource($entryDetail);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntryDetail  $entryDetail
     * @return \Illuminate\Http\Response
     */
    public function show(EntryDetail $entryDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntryDetail  $entryDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(EntryDetail $entryDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntryDetail  $entryDetail
     * @return \Illuminate\Http\Response
     */
    public function update(EntryDetailRequest $request, $id)
    {
        $entryDetail = EntryDetail::findOrFail($id);

        $entryDetail->fill($request->all())->save();

        return new EntryDetailResource($entryDetail);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntryDetail  $entryDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntryDetail $entryDetail)
    {
        //
    }
}
