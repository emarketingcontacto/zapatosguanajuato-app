<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $table='model';
    protected $primaryKey = 'modelId';

    public $timestamps = false;

    protected $fillable =
     [
        'modelName',
        'modelPrice',
        'modelImage',
        'bizId',
        'materialId',
        'seassonId',
        'modelsubcatId',
        'modelcatId'
      ];
}
