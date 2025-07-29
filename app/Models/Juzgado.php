<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Spatie\Permission\Traits\HasRoles;

class Juzgado extends Model
{
    //use HasRoles;
    
    protected $table = 'juzgados';
    protected $fillable = [
        'nombre',
        'created_at',
        'updated_at',
    ];

    public function juicios()
    {
        return $this->belongsTo(Juicio::class, 'id'); // o el nombre de tu columna FK
    }
}
