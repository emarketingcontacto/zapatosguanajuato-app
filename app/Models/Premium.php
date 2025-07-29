<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premium extends Model
{
    use HasFactory;
    protected $table = 'premium';
    protected $primaryKey = 'premiumId';
    public $timestamps = false;

    protected $fillable =
    [
        'premiumId',
        'premiumStart',
        'premiumEnd',
        'bizId'
    ];
}
