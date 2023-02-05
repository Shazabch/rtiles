<?php

namespace App\Http\Controllers;

use App\Models\size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('size');
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
    public function store(Request $request)
    {
        $sizes = new size();
        $sizes->article_no = $request->input('article_no');
        $sizes->sale_price = $request->input('sale_price');
        $sizes->purchase_price = $request->input('purchase_price');
        $sizes->size = $request->input('size');
        $sizes->stock = $request->input('stock');
        $sizes->save();
        return redirect()->back()->with('success','New Size Is Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(size $size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, size $size)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(size $size,$id)
    {
        $vendors = size::find($id);
        $vendors->delete();
        return back()->with('error','Size is Deleted');
    }
}
