<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ModelSubcategory extends Model
{
    use HasFactory;

    protected $table      = 'modelsubcategory';
    protected $primaryKey = 'modelsubcatId';
    public    $timestamps = false;

    protected $fillable = [
        'modelsubcatName',
        'modelcatId',
    ];


    public function modelcategory(){
        return $this->belongsTo(ModelCategory::class);
      }
}
