<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //

    protected $table = 'clientes';

    public $timestamps = false;

    protected $fillable = ['user_id','Cliente'];
}
