<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Spatie\Permission\Traits\HasRoles;

class Demandado extends Model
{
    //use HasRoles;
    
    protected $table = 'autoridad_demandada';
    protected $fillable = [
        'nombre',
        'created_at',
        'updated_at',
    ];

    public function juicios()
    {
        return $this->belongsTo(Juicio::class, 'demandado'); // o el nombre de tu columna FK
    }
}
