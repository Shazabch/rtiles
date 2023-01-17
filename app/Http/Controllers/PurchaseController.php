<?php

namespace App\Http\Controllers;

use App\Models\purchase;
use App\Models\size;
use App\Models\vendor;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase_code = strtoupper('PC'.now()->year.''.substr(str_shuffle('4ABCDEFG0123HIJKLMNOPQ56RSTU789VWXYZ'), 5,10));
        $vendors = vendor::all();
        $sizes = size::all();
        $purchases = purchase::paginate(2)->unique('purchase_code');
        return view('purchase',compact('vendors','purchase_code','sizes','purchases'));
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
        // return $request->input();
        $count = count($request->grade);
        for($i =0 ;$i<$count ; $i++ ){
            $purchase = new purchase();
            $purchase->vendor_id = $request->input('vendor_id');
            $purchase->purchase_code = $request->input('purchase_code');
            $purchase->total_amount = $request->input('total_amount');
            $purchase->article_no = $request->input('article_no')[$i];
            $purchase->size = $request->input('size')[$i];
            $purchase->grade = $request->input('grade')[$i];
            $purchase->packing = $request->input('packing')[$i];
            $purchase->box = $request->input('box')[$i];
            $purchase->measurement = $request->input('measurement')[$i];
            $purchase->total_price = $request->input('total_price')[$i];
            $purchase->price = $request->input('price')[$i];
            $purchase->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(purchase $purchase)
    {
        //
    }
}
