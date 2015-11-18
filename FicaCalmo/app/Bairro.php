<?php

namespace Pizzaria;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
   
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bairros';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['distrito_id', 'bairro'];
    
    
    public static function bairros ($id){
        
        return Bairro::where ('distrito_id','=',$id)
            ->get();
    }

    
}
