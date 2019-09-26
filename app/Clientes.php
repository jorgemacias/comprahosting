<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Clientes extends Model
{
    use SoftDeletes;

    use Userstamps;

    protected $table = 'clientes';

    public $timestamps = false;

    protected $fillable = ['user_id','Cliente'];
}
