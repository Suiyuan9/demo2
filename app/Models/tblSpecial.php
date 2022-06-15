<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblSpecial extends Model
{
    use HasFactory;
    protected $fillable = [
        'drawDate',
    ];

    public function special(){
        return $this->hasOne(tblSpecial::class, 'dd', 'drawDate');
    }
}
