@extends('layouts.main')

@section('content')
    <h1>Товар {{$items->title}}</h1>
    <hr>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach($images as $image)
                <img class="img-thumbnail" width=100 src="{{$image}}">
            @endforeach
        </div>
    </div>
    <h3>{{$items->title}}</h3>
    <div class="panel panel-default">
        <div class="panel-heading">Описание</div>
        <div class="panel-body">
            {{$items->description}}
        </div>
    </div>
    <h3>Параметры</h3>
    <table class="table table-striped">
        <thead>
        <th>Название</th>
        <th>Значение</th>
        <th>Ед. измерения</th>
        </thead>
        <tbody>

        @foreach($parameters as $parameter)
            <tr>
                <td>{{$parameter->title}}</td> <td>{{$parameter->value}}</td><td>{{$parameter->unit}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h2 class="text-success">Цена: {{$items->price}} руб.</h2>
    <hr>
    <button class="btn btn-primary btn-lg">Купить</button>
</div>
@stop