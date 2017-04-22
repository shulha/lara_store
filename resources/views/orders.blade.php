@extends('layouts.main')

@section('content')
<div class="container">
    <table class="table">
        <tr>
            <th>Номер заказа</th>
            <th>Сумма заказа</th>
            <th>Действие</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->order_id}}</td>
                <td>{{$order->summa}}</td>
                <td><a href="/orders/{{$order->order_id}}"><i class="glyphicon glyphicon-eye-open"></i> Посмотреть </a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection