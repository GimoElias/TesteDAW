<?php

namespace Pizzaria;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'distritos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['distrito'];

    
    
}
