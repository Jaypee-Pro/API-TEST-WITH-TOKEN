<?php

namespace App\Http\Controllers\V1;
use App\Http\Controllers\Controller;
use App\Models\item;
use App\Http\Requests\StoreitemRequest;
use App\Http\Requests\UpdateitemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return item::all();//return all item
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreitemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreitemRequest $request)
    {
        $item = item::create($request->all());
        return $item; //insert item
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        return $item;//return single data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateitemRequest  $request
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateitemRequest $request, item $item)
    {
        $item->update($request->all());//update
        return $item;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        $item->delete();

        return response('Item deleted', 204);//custom response
    }
}
