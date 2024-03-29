@extends('layouts.main')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-self-end mt-4">
                <h4 class="mt-1">All Customers &nbsp; &nbsp;</h4>
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
                <livewire:customer-table/>
            </div>
        </div>
    </div>
</div>

<!-- Modal for the vendor form  -->

<div class="col-lg-4">
 
    <div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="modal-subscribe" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h4 style="align-text:center;" class="text-center">Add New Customer</h4>
                    <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body  py-3">
                <form action="{{route('customer.store')}}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Phone</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="email">Address</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-warning mt-4">Save</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer z-2 mx-auto ">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal Content -->
</div>
@endsection