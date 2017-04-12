<?php

namespace App\Http\Controllers;

use App\Items;
use App\Parameters_values;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function add()
    {
        return view('add');
    }

    public function save(Request $request)
    {
//Сохраняем каждый параметр
        $item=new Items;
        $item->title=$request->title; //название
        $item->description=$request->description;//описание
        $item->price=$request->price; // цена

        $root=$_SERVER['DOCUMENT_ROOT']."/images/"; //определяем папку для сохранения картинок
//dd($request->parameter);
        if($request->hasFile('preview')) {
//Сохраняем картинки
            $url_img = []; // массив, который будет содержать ссылки на все картинки
            foreach ($request->file('preview') as $file) //обрабатываем массив с файлами
            {
                if (empty($file)) continue; // если <input type="file"... есть, но туда ничего не загруженно, то пропускаем
                $f_name = $file->getClientOriginalName(); //получаем имя файла
                $url_img[] = '/images/' . $f_name; //добавляем url картинки в массив
                $file->move($root, $f_name); //перемещаем файл в папку
            }
        $preview=implode(';',$url_img); //массив с ссылками переводим в строку, что бы сохранить в базу.
        }
        $item->preview=$preview ?? ""; //ссылки на картинки
        $item->save(); // Сохраняем все в базу.
//Обратабываем массивы с параметрами и их значениями.
        $out=array_combine($request->parameter ?? [],$request->value ?? []); // массив будет такой ['5'=>'300'], 5 - это id параметра, 300 - значение параметра
//Сохраняем все параметры и значения в базу
        if(empty($out)) {
            flash('Товар сохранен без параметров!', 'info');
            return back(); //если нет ни одного параметра то просто редиректим обратно.
        }
        foreach($out as $param=>$value)
        {
            $parameters=new Parameters_values;
            $parameters->parameters_id=$param;
            $parameters->items_id=$item->id;
            $parameters->value=$value ?? "N/A";
            $parameters->save();
        }

        flash()->success('Товар сохранен');
        return back();
    }
}
