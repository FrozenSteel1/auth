<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded=[];

    public static function carSave($data){

        $rules=[
            'name'=>'required',
            'brand'=>'min:3',
            'price'=>''
        ];

        $data1=$data->validate($rules);

        $item=new Car($data1);
      $item->save();
      return true;

    }
    public static function carShow($car){



    }
}
