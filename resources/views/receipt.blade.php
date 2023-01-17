
<!DOCTYPE html>
<html lang="en">


<!-- Volt CSS -->
<link type="text/css" href="{{asset('css/volt.css')}}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

<style type="text/css">
    body{
        background-color: white !important;
    }
    td{
        padding: 5px !important;
        font-size: 11px !important;
        white-space: normal !important;

    }
    p{
        font-size: 11px !important;
    }
    table{
        table-layout: fixed;
        width: 100% !important;
    }
</style>
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    

    <main>
        <section class="justify-content-center">
            <div class="container-fluid py-4 px-5">
                <div class="row">
                    <div class="col-12 text-center align-items-center justify-content-center">
                                <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('png.png')}}" width="100px" height="100px">
                                        @foreach($sales as $sale)
                                            @if($loop->first)
                                                <p class="mt-2 lead"><b style="font-size: 15px;">Royal Sanitary & Tile center</br>

                                                Customer Name : </b><span style="font-size: 15px;">{{$sale->customer ? $sale->customer->name : 'N/A'}}</span>
                                                &nbsp;<b style="font-size: 15px;">Sale Code : </b> <span style="font-size: 15px;">{{$sale->sale_code}}</span>
                                            </p>
                                            @endif
                                        @endforeach
                                </div>
                                <div class="col-md-6 mt-0 mt-md-5 mb-2 mb-md-0">
                                    <b class="text-center" style="font-size: 15px;">Contact us :</b> <br>
                                    <b style="font-size: 15px;">Rana ALi Abbas</b> # <span style="font-size: 15px;">0317-0009544</span> <br class="d-none d-md-flex">
                                    <b style="font-size: 15px;">Zameer Haider</b> # <span style="font-size: 15px;">0304-5562602</span> <br>
                                   
                                </span>
                                </div>
                                </div>
                        </div>
                        <div>
                           

                             <table class="table ">
                                  <thead>
                                        <tr>
                                            <th>#</th>  
                                            <th>Size</th>
                                            <th>Article No.</th>
                                            <th>Grade</th>
                                            <th>Packing</th>
                                            <th>Box</th>
                                            <th>Tile</th>
                                            <th>Meter</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                        </tr>
                                  </thead>
                                  <tbody>
                                        @foreach($sales as $sale)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$sale->size}}</td>
                                            <td>{{$sale->article_no}}</td>
                                            <td>{{$sale->grade}}</td>
                                            <td>{{$sale->packing}}</td>
                                            <td>{{$sale->box}}</td>
                                            <td>{{$sale->tile}}</td>
                                            <td>{{$sale->measurement}}</td>
                                            <td>{{$sale->price}}</td>
                                            <td>{{$sale->total_price}}</td>
                                        </tr>
                                        @endforeach
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><b>Total Amount : </b></td>
                                                    <td><b>{{number_format($sales->sum('total_price'))}} RS</b></td>
                                                </tr>
                                  </tbody>
                             </table>
                             <div class="row justify-content-center text-center">
                             <b>Address : </b> <span>22-2-c-11 Collage Road , Butt Chowk Township 
                                    Lahore-Pakistan .Near by Arif CNG ,
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


</body>

</html>

