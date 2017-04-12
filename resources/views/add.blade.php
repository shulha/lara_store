<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <title>Добавить товар</title>
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset("js/functions.js") }}"></script>
</head>
<body>
<div class="container">
    <h1>Добавить товар</h1>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <input type="file" name="preview[]"/><br>
        </div>
        <div class="col-md-8">
            <i class="glyphicon glyphicon-arrow-left"></i> Выберите миниатюру для товара. <p class="help-block">Размер изображения 150x150px, не более 200Кб</p>
        </div>
    </div>
    <hr>
    <h3>Дополнительные изображения</h3>
    <button class="btn btn-primary add_images" type="button"><i class="glyphicon glyphicon-plus"></i></button>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <form method="post" action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="control-label" for="name">Название товара</label>
            <input class="form-control" type="text" name="title"/>
            <label for="description" class="control-label">Описание товара</label>
            <textarea class="form-control" rows="4"></textarea>
            <label class="control-label" for="price">Цена</label>
            <input class="form-control" type="text" name="price"/>
            <button class="btn btn-default btn-lg" type="submit">Сохранить товар</button>

            </form>
        </div>
    </div>
    <h2>Параметры товара</h2>
    <hr>

    <button class="btn btn-primary btn-lg add_button" type="button">Добавить</button>

</div>
</body>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Добавить параметр</h4>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control parameter_modal" name="parameter" placeholder="Наименование параметра"/><br>
                <input type="text" class="form-control unit_modal" name="unit" placeholder="Единица измерения"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary save_and_close">Сохранить изменения</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

</html>