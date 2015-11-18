<?php

namespace Pizzaria;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
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
    protected $fillable = ['pizza', 'preco','image', 'categoria_id', 'ingrediente_id'];

    
    
     public function setImageAttribute($image) {
        if (!empty($image)) {
            $this->attributes['image'] = Carbon::now()->second . $image->getClientOriginalName();
            $name = Carbon::now()->second . $image->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($image));
        }
    }
    
}
