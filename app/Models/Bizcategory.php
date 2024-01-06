<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bizcategory extends Model
{
   use HasFactory;
   protected $table='bizcategories';
   protected $primaryKey = 'bizcatId';

   public $timestamps = false;

   protected $fillable =
    [
       'bizcatName',
       'bizcatImage'
     ];

     public function biz(){
        return $this->belongsTo(Biz::class);
     }
}
