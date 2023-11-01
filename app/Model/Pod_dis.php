<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pod_dis extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'pod_dis';
    protected $fillable = [
        'id ',
        'id_pod',
        'id_dis'
    ];
}
