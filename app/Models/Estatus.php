<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Spatie\Permission\Traits\HasRoles;
use App\Models\Documento;

class Estatus extends Model
{
    //use HasRoles;
    
    protected $table = 'estatus_juicio';
    protected $fillable = [
        'nombre',
        'created_at',
        'updated_at',
    ];
}
