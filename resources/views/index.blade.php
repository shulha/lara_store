@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        @foreach($items as $item)
            <div class="col-md-3">
                <div class="thumbnail">
                    <img height=100 src="{{explode(';',$item->preview)[0]}}" alt="">     <!-- первая картинка в поле preview в базе -->
                    <div class="caption">
                        <h3>{{$item->title}}</h3>
                        <p>Цена:<span class="price">{{$item->price}}</span> руб.</p>
                        <p>
                            <a href="#" class="btn btn-primary buy-btn" id="{{$item->id}}" role="button">Купить</a>
                            <a href="/show/{{$item->id}}" class="btn btn-default" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection