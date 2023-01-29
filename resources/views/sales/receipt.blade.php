
<!DOCTYPE html>
<html lang="en">


<!-- Volt CSS -->
<link type="text/css" href="{{asset('css/volt.css')}}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

<style type="text/css">
    @media print {
  body {-webkit-print-color-adjust: exact;}
}
@page {
    size:A4 landscape;
    margin-left: 0px;
    margin-right: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    margin: 0;
    -webkit-print-color-adjust: exact;
}

    body::before{
        content: "";
        background-image: url('{{asset("logo.png")}}');
        opacity: 2%;
        position: fixed;
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
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

<body class="card card-body p-4">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    
    <main >
        <section class="justify-content-center">
            <div class="container-fluid py-4 px-5">
                <div class="row">
                    <div class="col-12 text-center align-items-center justify-content-center">
                                <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('logo.png')}}" width="100px" height="100px">
                                                <p class="mt-2 lead"><b style="font-size: 15px;">Royal Sanitary & Tile center</br>

                                                Customer Name : </b><span style="font-size: 15px;">{{$sales1[0]->customer ? $sales1[0]->customer->name : 'N/A'}}</span>
                                                &nbsp;<b style="font-size: 15px;">Sale Code : </b> <span style="font-size: 15px;">{{$sales1[0]->sale_code}}</span>
                                            </p>
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
                           

                             <table class="table table-responsive">
                                  <thead>
                                        <tr>
                                            <th class="text-center">#</th>  
                                            <th class="text-center">Size</th>
                                            <th class="text-center">Article No.</th>
                                            <th class="text-center">Grade</th>
                                            <th class="text-center">Packing</th>
                                            <th class="text-center">Box</th>
                                            <th class="text-center">Tile</th>
                                            <th class="text-center">Meter</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Total Price</th>
                                        </tr>
                                  </thead>
                                  <tbody>
                                        @foreach($sales as $sale)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td class="text-center">{{$sale->size}}</td>
                                            <td class="text-center">{{$sale->article_no}}</td>
                                            <td class="text-center">{{$sale->grade}}</td>
                                            <td class="text-center">{{$sale->packing}}</td>
                                            <td class="text-center">{{$sale->box}}</td>
                                            <td class="text-center">{{$sale->tile}}</td>
                                            <td class="text-center">{{$sale->measurement}}</td>
                                            <td class="text-center">{{number_format($sale->price , 2)}}</td>
                                            <td class="text-center">{{number_format($sale->total_price ,2 )}}</td>
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
                                                    <td></td>
                                                    <td><b>Total Amount : </b></td>
                                                    <td><b>{{number_format($sales->sum('total_price'))}} RS</b></td>
                                                </tr>
                                  </tbody>
                             </table>
                             <div class="row justify-content-center text-center mt-md-4">
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

