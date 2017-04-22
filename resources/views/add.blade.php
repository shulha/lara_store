@extends('layouts.main')

@section('content')
<h1>Добавить товар</h1>
<hr>
<form method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-4">
            <input type="file" name="preview[]"/><br>
        </div>
        <div class="col-md-8">
            <i class="glyphicon glyphicon-arrow-left"></i> Выберите миниатюру для товара. <p class="help-block">
                Размер изображения 150x150px, не более 200Кб</p>
        </div>
    </div>
    <hr>
    <h3>Дополнительные изображения</h3>
    <button class="btn btn-primary add_images" type="button"><i class="glyphicon glyphicon-plus"></i></button>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <label class="control-label" for="name">Название товара</label>
            <input class="form-control" type="text" name="title"/>
            <label class="control-label" for="description">Описание товара</label>
            <textarea class="form-control" rows="4" name="description"></textarea>
            <label class="control-label" for="price">Цена</label>
            <input class="form-control" type="text" name="price"/>
        </div>
    </div>
    <h3>Параметры товара</h3>
    <hr>
    <button class="btn btn-primary btn-lg add_button" type="button">Добавить</button>
    <hr>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-default btn-lg save_item" type="submit">Сохранить товар</button>
</form>
@endsection