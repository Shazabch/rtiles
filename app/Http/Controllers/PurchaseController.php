<?php

namespace App\Http\Controllers;

use App\Models\purchase;
use App\Models\Purchasedetail;
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
        $purchases = new purchase();
        $purchases->vendor_id = $request->input('vendor_id');
        $purchases->purchase_code = $request->input('purchase_code'); 
        $purchases->total_amount = $request->total_amount;
        $purchases->save();
        $total = 0; 
       
        $count = count($request->grade);
        for($i =0 ;$i<$count ; $i++ ){
            $details[] = [
                'purchase_id' => $purchases->id,
                'article_no' => $request->input('article_no')[$i],
                'size' => $request->input('size')[$i],
                'grade' => $request->input('grade')[$i],
                'packing' => $request->input('packing')[$i],
                'box' => $request->input('box')[$i],
                'measurement' => $request->input('measurement')[$i],
                'total_price' => $request->input('total_price')[$i],
                'price' =>  $request->input('price')[$i],
                'created_at' => now()   
                
            ];
              $total = $total +$request->input('total_price')[$i];
        }

        Purchasedetail::where('id',$purchases->id)->delete();
        Purchasedetail::insert($details);
        $purchases->update(['amount'=>$total]);  
        
        return back()->with('succeess','New Sale is added !');
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
