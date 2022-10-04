@extends('layouts.main')
@section('content')
<div class="row mt-4">
    <div class="col-12 col-sm-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="px-xl-0">
                    <h2 class="h5">Customers</h2>
                    <h3 class="fw-extrabold mb-1"></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="px-xl-0">
                    <h2 class="h5">Test</h2>
                    <h3 class="fw-extrabold mb-1">0</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="px-xl-0">
                    <h2 class="h5">Test</h2>
                    <h3 class="fw-extrabold mb-1">0</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-header">
                <h4 class="h5">Customer Per Year for 5 Years</h4>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
                    <div>
                        <div class="h6 mb-0 d-flex align-items-center"><svg class="icon icon-xs text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                            </svg> </div>
                    </div>
                    <div> <svg class="icon icon-xs text-gray-500 ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-header">
                <h4 class="h5">Payments for Last 5 Years</h4>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
                    <div>
                        <div class="h6 mb-0 d-flex align-items-center"><svg class="icon icon-xs text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                            </svg> </div>
                    </div>
                    <div> <svg class="icon icon-xs text-gray-500 ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4">
                                    <!-- Button Modal -->
                                    <button type="button" class="btn btn-block btn-gray-800 mb-3" data-bs-toggle="modal" data-bs-target="#modal-subscribe">Subscribe</button>
                                    <!-- Modal Content -->
                                    <div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="modal-subscribe" aria-hidden="true">
                                        <div class="modal-dialog modal-tertiary modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content bg-dark text-white">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close btn-close-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center py-3">
                                                    <span class="modal-icon">
                                                        <svg class="icon icon-xl text-gray-200 mb-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z" clip-rule="evenodd"></path></svg>
                                                    </span>
                                                    <h3 class="modal-title mb-3">Join our 1,360,462 subscribers</h3>
                                                    <p class="mb-4 lead">Get exclusive access to freebies, premium products and news.</p>
                                                    <div class="form-group px-lg-5">
                                                        <div class="d-flex mb-3 justify-content-center">
                                                            <input type="text" id="subscribe" class="me-sm-1 mb-sm-0 form-control form-control-lg" placeholder="example@company.com">
                                                            <div>
                                                                <button type="submit" class="ms-2 btn large-form-btn btn-secondary">Subscribe</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer z-2 mx-auto text-center">
                                                    <p class="text-white font-small">
                                                        We’ll never share your details with third parties.
                                                        <br class="visible-md">View our <a href="#">Privacy Policy</a> for more info.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal Content -->
                                </div>

@endsection
