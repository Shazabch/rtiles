@extends('layouts.main')
@section('content')
<style>
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-self-end mt-4">
                <h4 class="mt-1">All Sales &nbsp; &nbsp;</h4>
                <button  type="button" class="btn btn-sm text-sm  bg-gray-600 text-white " data-bs-toggle="modal" 
                data-bs-target="#modal-subscribe">Add New</button>
            </div>
        </div>
    </div>
</div>
       
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col">
            <div class="card card-body">
                <div >
                    <table class="table  table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sale Code</th>
                                <th>Customer Name</th>
                                <th>Total Amount</th>
                                <th>Sale Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $index => $sale)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$sale->sale_code}}</td>
                                <td>{{$sale->customer ? $sale->customer->name : 'N/A'}}</td>
                                <td>{{number_format($sale->total_amount)}}</td>
                                <td>{{$sale->created_at->format('M d Y, h:m:s a');}}</td>
                                <td>
                                    <a href="{{route('sales.receipt',$sale->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for the customer form  -->

<div class="row">
 
    <div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="modal-subscribe" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-dialog-centered modal-lg" role="document"  style="max-width: 1100px;">
            <div class="modal-content bg-dark text-white">
                <form action="{{route('sales.store')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                    <h4 style="align-text:center;" class="text-center ">Add New sale</h4> 
                    <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row container">
                    <div class="col-md-4 ">
                        <select style="display:block; width:100%;  "
      name="customer_id" class="search-select form-control" required>
                            <option  value="0">Select Customer</option>
                            @foreach($customers as $customer)
                                <option style="padding:100px;" value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 ">
                        <input type="text" class="form-control mt-2 mt-md-0" name="sale_code" value="{{$sale_code}}" readonly>  
                    </div>
                </div>
                <div class="modal-body text-center py-3 table-responsive    ">
                        <table class="table  table-dark table-hovered table-responsive">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>Article No.</th>
                                    <th>Grade</th>
                                    <th>Packing</th>
                                    <th>Box</th>
                                    <th>Meter</th>
                                    <th>Price</th>
                                    <th>T.Price</th>
                                    <th><input type="button" class="btn btn-success text-white addRow" value="+"></th>
                                </tr>
                            </thead>
                                <tbody class="tbody1" >
                                    <tr>
                                        <input type="hidden" name="total_amount" class="amount" value="">
                                        <td><input type="text" class="form-control" name="size[]" required> </td>
                                        <!-- <td><input type="text" class="form-control" name="article_no[]" required></td> -->
                                        <td>
                                            <input type="text" class="form-control" name="article_no[]">
                                        </td>
                                        <td><input type="text" class="form-control" value="AAA" name="grade[]" required></td>
                                        <td><input type="number" step="0.01" class="form-control" name="packing[]" required></td>
                                        <td><input type="number" class="form-control box" id="box" name="box[]" required></td>
                                        <td><input type="number" step="0.01" class="form-control meter" id="meter"  name="measurement[]" required></td>
                                        <td><input type="number" step="0.01" class="form-control price" id="price"  name="price[]" required></td>
                                        <td><input type="text" class="form-control total_price" value="" id="total_price" name="total_price[]" readonly></td>
                                        <td><a href="javascript:void(0);" class="btn btn-danger text-white removeRow">-</a></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td > <b>Total Amount :</b> <span class="total_amount ">0.00</span> <br> <br>
                                    <!-- <span class="text-sm text-warning">Date : {{now()->format('d-m-y')}}</span>  -->
                                </td>
                                    <td>&nbsp;</td>
                                </tfoot>
                        </table>
                </div>
                <div class="modal-footer ">
                    <button class="btn btn-info text-white" type="submit">Save sale</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of Modal Content -->
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script>
    $(document).ready(function(){
        $('.search-select').select2({
            dropdownParent: $('#modal-subscribe'),
        });
        $('thead').on('click','.addRow',function(){
       const tr = "<tr>"+
                       "<td><input type='text' class='form-control' name='size[]'></td>"+
                       "<td><input type='text' class='form-control' name='article_no[]'></td>"+
                       "<td><input type='text' class='form-control' value='AAA' name='grade[]'></td>"+
                       "<td><input type='text' class='form-control ' name='packing[]'></td>"+
                       "<td><input type='text' class='form-control ' id='box' name='box[]'></td>"+
                       "<td><input type='text' class='form-control ' id='meter' name='measurement[]'></td>"+
                       "<td><input type='text' class='form-control ' id='price' name='price[]'></td>"+
                       "<td><input type='text' class='form-control total_price' name='total_price[]' readonly></td>"+
                       "<td><a href='javascript:void(0);'' class='btn btn-danger text-white removeRow'>-</a></td>"+
                   "</tr>";
                   $('.tbody1').append(tr);
         });


        $('.tbody1').on('click','.removeRow',function(){
            $(this).parent().parent().remove();
            total();
        });


        function total(){
            var total = 0;
            $('.total_price').each(function(i,e){
                total+= parseInt($(this).val()-0);
            });
            $('.total_amount').html(total + '\nRS');
            $('.amount').val(total);
        }


        $('body').delegate('#box,#meter,#price','keyup',function(){
            var data = $(this).parent().parent();
            var box =  data.find('#box').val();
            var meter =  data.find('#meter').val();
            var price =  data.find('#price').val();
            data.find('.total_price').val(box*meter*price);
            total();
        });
    });
</script>
