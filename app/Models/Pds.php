<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pds extends Model
{
    public $fillable = [
        'id',
        'pds_num',
        'description',
        'status',
        'comment'
    ];
}
