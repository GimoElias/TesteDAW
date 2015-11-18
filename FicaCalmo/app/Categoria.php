<?php

namespace Pizzaria;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categorias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria', 'preco'];

    
}
