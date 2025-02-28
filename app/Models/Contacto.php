<?php

namespace App\Models;

use App\Enums\TipoContacto;
use App\Models\Personas\Persona;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contactos';

    public $timestamps = false;

    protected $fillable = [
        'persona_id',
        'tipo_red_social_id',
        'tipo',
        'nombre',
        'observaciones',
    ];

    protected $casts = [
        'tipo' => TipoContacto::class,
    ];

    public function tipoRedSocial(): BelongsTo
    {
        return $this->belongsTo(TipoRedSocial::class, 'tipo_red_social_id');
    }

    public function persona(): BelongsTo
    {
        return $this->belongsTo(Persona::class);
    }
}
