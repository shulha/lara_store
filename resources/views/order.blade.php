@extends('layouts.main')

@section('content')
<form method="post" action="/order_final/" >
    <div>
        <input type="text" name="customer_name" class="form-control" placeholder="Name">
    </div>
    <div>
        <input type="text" name="phone" class="form-control" placeholder="Phone">
    </div>
    <div>
        <input type="text" name="city" class="form-control" placeholder="City">
    </div>
    <div>
        <input type="text" name="comment" class="form-control" placeholder="Comment">
    </div>
    <div>
        <input type="number" name="amount" class="form-control" placeholder="Amount">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" value="{{$id}}" name="product_id">
    <input type="submit" value="Order">
</form>
@endsection