<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp_dis extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'emp_dis';
    protected $fillable = [
        'id ',
        'id_emp',
        'id_dis'
    ];
}
