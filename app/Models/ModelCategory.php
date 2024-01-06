<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ModelCategory extends Model
{
    use HasFactory;
    protected $table='modelcategory';
    protected $primaryKey = 'modelcatId';
    public $timestamps = false;

    protected $fillable =
     [
        'modelcatName',
        'modelcatImage',
      ];

      public function modelsubcategory (){
        return $this->hasMany(ModelSubcategory::class,'modelcatId');
      }
}
