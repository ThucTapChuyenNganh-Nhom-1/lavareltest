<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_NgoaiNgu extends Model
{
    protected $NgoaiNgu = 'ngoaingu';
    protected $primaryKey = 'mann';
    protected $keyType = 'string';
    protected $dateFormat = 'U';
    public $incrementing = false;
    public $timestamps = false;
}
