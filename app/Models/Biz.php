<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biz extends Model
{
    use HasFactory;
    protected $table ='biz';
    protected $primaryKey = 'bizId';
    public $timestamps = false;

    protected $fillable=
    [
        'bizName',
        'bizStreetNum',
        'bizNeigborhood',
        'bizState',
        'bizCity',
        'bizLat',
        'bizLon',
        'bizTel',
        'bizContact',
        'bizWhatsApp',
        'bizFacebook',
        'bizWeb',
        'bizEmail',
        'bizImage',
        'bizcatId',
        'saletypeId',
        'bizLastvisit'

    ];

      public function bizcategory(){
        return $this->hasMany(Bizcategory::class, 'bizcatId');
      }
}
