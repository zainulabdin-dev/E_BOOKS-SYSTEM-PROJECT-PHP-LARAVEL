@extends('user.navbar')
@section('nav')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-3">
<form action="{{route('payment')}}" method="POST">
    @csrf

    <input type="hidden" name="order_id" value="{{$orders->id}}">
    <input type="hidden" name="payment_method" value="{{$orders->payment_method}}">
    <input type="hidden" name="total_price" value="{{$orders->total_price}}">
    <input type="hidden" name="payment_status" value="confirmed">

    @if ($orders->payment_method == 'credit_card' && $orders->order_type == 'hardcopy')
    

    <label>Card Holder Name</label>
    <input type="text" name="card_name" class="form-control" value="{{$orders->user_name}}">

    <label>Card Number</label>
    <input type="text" name="card_number" class="form-control" value="">

    <label>Expiry Date</label>
    <input type="text" name="expiry" class="form-control" placeholder="MM/YY">

    <label>CVV</label>
    <input type="text" name="cvv" class="form-control">
      <textarea name="address" class="form-control mt-3">
        {{$orders->address}}
    </textarea>
    @else
        <label>Delivery Address</label>
    <textarea name="address" class="form-control">
        {{$orders->address}}
    </textarea>

    <label>Payment Method</label>
    <input type="text" value="    {{$orders->payment_method}}" class="form-control" name="" readonly>

    @endif

    <button type="submit" class="btn btn-primary mt-3 mb-5">
        Place Order
    </button>
</form>
        </div>
    </div>
</div>
@endsection

