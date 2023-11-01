<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =
    [
       'id ',
       'first_name',
       'name',
       'second_name',
       'sex',
       'date',
       'address',
       'id_subdivision',
       'id_position',
       'photo',
    ];
    public function photo($img)
    {
        $photo = time().$img['name'] ;
        $this->photo = $photo;
        //var_dump($_SERVER['DOCUMENT_ROOT']. '/pop-it-mvc/public/img/' . $photo); die();
        move_uploaded_file($img['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/public/img/' . $photo);
    }
}
