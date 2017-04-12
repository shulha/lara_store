<div class="form-inline borderes" role="form">
    <div class="form-group">
        <label for="parameter" class="sr-only">Параметр</label>
        <div class="input-group">
            <span class="input-group-btn">
                <button class="btn btn-default  add_parameter" type="button"><i class="glyphicon glyphicon-plus"></i></button>
            </span>
            <select class="form-control" name="parameter[]">
                @foreach($parameters as $parameter)
                    <option value="{{$parameter->id}}">{{$parameter->title}} ({{$parameter->unit}})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="value" class="sr-only">Значение параметра</label>
            <input class="form-control" name="value[]" placeholder="Значение параметра"/>
        </div>
        <div class="form-group">
        <span class="input-group-btn">
            <button class="btn btn-default remove_button"><i class="glyphicon glyphicon-minus"></i></button>
        </span>
        </div>
    </div>
</div>

{{--
<div class="form-inline" role="form">
    <div class="form-group">
        <label for="parameter" class="sr-only">Параметр</label>
        <div class="input-group">
            <span class="input-group-btn">
                <button class="btn btn-default add_parameter" type="button"><i class="glyphicon glyphicon-plus"></i></button>
            </span>
            <select class="form-control" name="parameter">
                <option value=1>Параметр 1</option>
                <option value=2>Параметр 2</option>
                <option value=3>Параметр 3</option>
            </select>
            <span class="input-group-btn">
                <button class="btn btn-default remove_button" type="button"><i class="glyphicon glyphicon-minus"></i></button>
            </span>
        </div>
        <div class="form-group">
            <label for="value" class="sr-only">Значение параметра</label>
            <input class="form-control" name="value" placeholder="Значение параметра"/>
        </div>
        <div class="form-group">
            <label for="value" class="sr-only">Единица измерения</label>
            <input class="form-control" name="unit" placeholder="Единица измерения"/>
        </div>
    </div>
</div>
--}}
