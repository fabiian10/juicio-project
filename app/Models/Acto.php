<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Spatie\Permission\Traits\HasRoles;
use App\Models\Juicio;

class Acto extends Model
{
    //use HasRoles;
    
    protected $table = 'acto_reclamado';
    protected $fillable = [
        'nombre',
        'created_at',
        'updated_at',
    ];
}
