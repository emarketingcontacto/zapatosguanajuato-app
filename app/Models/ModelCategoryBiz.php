<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCategoryBiz extends Model
{
    use HasFactory;
    protected $table='modelcategory_biz';
    protected $primaryKey ='modelcategorybizId';
    public $timestamps = false;

    protected $fillable =
    [
        'modelcatId',
        'bizId'
    ];
}

