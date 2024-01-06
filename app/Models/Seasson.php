<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seasson extends Model
{
    use HasFactory;

    protected $table='seasson';
    protected $primaryKey = 'seassonId';

    public $timestamps = false;

    protected $fillable =
     [
        'seassonName',
        'seassonStart',
        'seassonEnd'
      ];
}
