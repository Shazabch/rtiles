@extends('layouts.main')
@section('content')
  <body>
    <div class="container mt-4">
        <div class="card card-body p-5">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('orealLogo.png') }}" class="img-responsive">
        </div>
        <div class="col-md-6">
          <h3>Purchase Details</h3>
          <p><b>Vednor Name:</b> {{$purchases1->vendor->name}}</p>
          <p><b>Purchase code:</b> {{$purchases1->purchase_code}}</p>
          <p><b>Total Amount:</b> {{$purchases1->total_amount}} Rs</p>
          <p><b>Purchase Date:</b> {{ $purchases1->created_at}}</p>
        </div>
      </div>
      <h3 class="mb-3"><i>Further purchase Details</i></h3>
      <table class="table table-responsive">
        <tr>
          <th class="text-center">Article No.</th>
          <th class="text-center">Size</th>
          <th class="text-center">Grade</th>
          <th class="text-center">Packing</th>
          <th class="text-center">Box</th>
          <th class="text-center">Measurement</th>
          <th class="text-center">Price</th>
          <th class="text-center">Total Price</th>
        </tr>
        @foreach($purchases as $purchase)
        <tr>
          <td class="text-center">{{ $purchase->article_no }}</td>
          <td class="text-center">{{ $purchase->size }}</td>
          <td class="text-center">{{ $purchase->grade }}</td>
          <td class="text-center">{{ $purchase->packing }}</td>
          <td class="text-center">{{ $purchase->box }}</td>
          <td class="text-center">{{ $purchase->measurement }}</td>
          <td class="text-center">{{ $purchase->price }}</td>
          <td class="text-center">{{ $purchase->total_price }}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </body>
        </div>
    </div>

@endsection