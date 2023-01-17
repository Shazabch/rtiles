<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\sale;
use App\Models\Saledetail;
use App\Models\size;
use App\Models\vendor;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale_code = strtoupper('SC'.now()->year.''.substr(str_shuffle('4ABCDEFG0123HIJKLMNOPQ56RSTU789VWXYZ'), 5,10));
        $customers = customer::all();
        $sizes = size::all();
        $sales = sale::all()->unique('sale_code')->sortByDesc('id');
        return view('sale',compact('customers','sale_code','sizes','sales'));
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
        $sales = new sale();
        $sales->customer_id = $request->input('customer_id');
        $sales->sale_code = $request->input('sale_code'); 
        $sales->total_amount = $request->total_amount;
        $sales->save();
        $total = 0; 
       
        $count = count($request->grade);
        for($i =0 ;$i<$count ; $i++ ){
            $details[] = [
                'sale_id' => $sales->id,
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

        Saledetail::where('id',$sales->id)->delete();
        Saledetail::insert($details);
        $sales->update(['amount'=>$total]);  
        
        return back()->with('succeess','New Sale is added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(sale $sale,$id)
    {
        // dd($id);
        $sale_code = $id;
        $sales = Saledetail::where('sale_id',$sale_code)->get();
        // dd($sales);
        return view('sales.receipt',compact('sale_code','sales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = sale::find($id);
        $code =$sale->sale_code;
        $sale_code = $id;
        $customers = customer::all();
        $sales = Saledetail::where('sale_id',$sale_code)->get();
        return view('sales.edit',compact('customers','sales','sale_code','code'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sale $sale )
    {
        $id = $request->id ;
        $code = $request->code;
        $sales = sale::find($id);
        $sales->customer_id = $request->input('customer_id');
        $sales->sale_code = $code; 
        $sales->total_amount = $request->total_amount;
        $sales->save();
        // dd($sales->id);
        $total = 0; 
       
        $count = count($request->grade);
        for($i =0 ;$i<$count ; $i++ ){
            $details[] = [
                'sale_id' => $sales->id,
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

        Saledetail::where('sale_id',$sales->id)->delete();
        Saledetail::insert($details);
        $sales->update(['total_amount'=>$total]);    

        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(sale $sale)
    {
        //
    }
}
