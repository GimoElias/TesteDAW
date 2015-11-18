<?php

namespace Pizzaria;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clientes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'apelido',
        'telefone',
        'email',
        'nuit',
        'casa',
        'quarteirao', 
        'distrito_id',
        'bairro_id'
        ];

    
}
