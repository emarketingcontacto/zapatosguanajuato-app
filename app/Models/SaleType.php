<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleType extends Model
{
    use HasFactory;
    protected $table ='saletype';
    protected $primaryKey = 'saletypeId';
    public $timestamps = false;

    protected $fillable =
    [
        'saletypeName',
        'saletypeConditions'
    ];
}
