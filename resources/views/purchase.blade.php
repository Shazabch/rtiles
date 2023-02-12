@extends('layouts.main')
@section('content')
<style>

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-self-end mt-4">
                <h4 class="mt-1">All purchases &nbsp; &nbsp;</h4>
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
                                <th class="text-center">#</th>
                                <th class="text-center">purchase Code</th>
                                <th class="text-center">vendor Name</th>
                                <th class="text-center">Total Amount</th>
                                <th class="text-center">purchase Date</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($purchases as $index => $purchase)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$purchase->purchase_code}}</td>
                                <td class="text-center">{{$purchase->vendor ? $purchase->vendor->name : 'N/A'}}</td>
                                <td class="text-center">{{number_format($purchase->total_amount)}}</td>
                                <td class="text-center">{{$purchase->created_at->format('M d Y, h:m:s a');}}</td>
                                <td class="text-center">
                                    <a href="{{ route('purchases.show',$purchase->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                    </a> &nbsp;
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

<!-- Modal for the vendor form  -->

<div class="row">
 
    <div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="modal-subscribe" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-dialog-centered modal-lg" role="document"  style="max-width: 1100px;">
            <div class="modal-content bg-dark text-white">
                <form action="{{route('purchases.store')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                    <h4 style="align-text:center;" class="text-center ">Add New purchase</h4> 
                    <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row container">
                    <div class="col-md-4 ">
                        <select name="vendor_id" class="form-control" required>
                            <option value="0">Select vendor</option>
                            @foreach($vendors as $vendor)
                                <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 ">
                        <input type="text" class="form-control mt-2 mt-md-0" name="purchase_code" value="{{$purchase_code}}" readonly>  
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
                                    <td><input type="number" step="0.01" class="form-control" id="packing" name="packing[]" required></td>
                                    <td><input type="number" class="form-control box" id="box" name="box[]" required></td>
                                    <td><input type="number" step="0.01" class="form-control meter" id="meter"  name="measurement[]" readonly required></td>
                                    <td><input type="number" step="0.01" class="form-control price" id="price"  name="price[]" required></td>
                                    <td><input type="text" class="form-control total_price" value="" id="total_price" name="total_price[]" readonly required></td>
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
                    <button class="btn btn-info text-white" type="submit">Save purchase</button>
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
                       "<td><input type='text' class='form-control' name='size[]' required></td>"+
                       "<td><input type='text' class='form-control' name='article_no[]' required></td>"+
                       "<td><input type='text' class='form-control' value='AAA' name='grade[]' required></td>"+
                       "<td><input type='text' class='form-control ' id='packing' name='packing[]' required></td>"+
                       "<td><input type='text' class='form-control ' id='box' name='box[]' required></td>"+
                       "<td><input type='text' class='form-control meter' id='meter' name='measurement[]' readonly required></td>"+
                       "<td><input type='text' class='form-control ' id='price' name='price[]' required></td>"+
                       "<td><input type='text' class='form-control total_price' name='total_price[]' required readonly></td>"+
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


        $('body').delegate('#box,#packing','keyup',function(){
            var data = $(this).parent().parent();
            var box =  data.find('#box').val();
            var meter =  data.find('#meter').val();
            var packing =  data.find('#packing').val();
            var meter1 = data.find('.meter').val(box*packing);
        });
        $('body').delegate('#price','keyup',function(){
            var data = $(this).parent().parent();
            var meter =  data.find('.meter').val();
            var price =  data.find('#price').val();
            data.find('.total_price').val(meter*price);
            total();
        });
    });
</script>