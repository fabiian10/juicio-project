<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Spatie\Permission\Traits\HasRoles;
use App\Models\Acto;
use App\Models\Demandado;
use App\Models\User;
use App\Models\Juzgado;
use App\Models\Estatus;
use App\Models\Documento;
use App\Models\Fecha;
use App\Models\EstadoJuicio;


class Juicio extends Model
{
    //use HasRoles;
    
    protected $table = 'juicios';
    protected $fillable = [
        'num_expediente',
        'inicio_juicio',
        'acto_reclamado_id',    // Cambiado
        'demandado_id',         // Cambiado
        'demandante',
        'estado_juicio_id',     // Cambiado
        'juzgado_tribunal_id',  // Cambiado
        'user_id',  // Cambiado
        'status',
    ];

    // Relaciones
    // public function fechas()
    // {
    //     return $this->hasMany(Fecha::class, 'id_juicio');
    // }

    // public function historialEstadoJuicio()
    // {
    //     return $this->hasMany(EstadoJuicio::class, 'id_juicio');
    // }

    // public function documentos()
    // {
    //     return $this->hasMany(Documento::class, 'id_juicio');
    // }

    public function actoReclamado()
    {
        return $this->belongsTo(Acto::class, 'acto_reclamado_id'); // Corregido
    }

    public function demandado()
    {
        return $this->belongsTo(Demandado::class, 'demandado_id');
    }

    public function estadoJuicio()
    {
        return $this->belongsTo(Estatus::class, 'estado_juicio_id');
    }

    public function juzgadoTribunal()
    {
        return $this->belongsTo(Juzgado::class, 'juzgado_tribunal_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
