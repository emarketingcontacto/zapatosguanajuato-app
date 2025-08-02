<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospectos extends Model
{
    use HasFactory;
    protected $table ='prospectos';
    protected $primaryKey = 'prospectoId';
    public $timestamps = false;

    protected $fillable= [
        'prospectoEmail',
        'prospectoNegocio',
        'prospectoDireccion',
        'prospectoColonia',
        'prospectoCiudad',
        'prospectoContacto',
        'prospectoTelefono',
        'prospectoTipoNegocio',
        'prospectoTipoCalzado',
        'prospectoCondiciones',
        'prospectoImagen',
    ];
}
