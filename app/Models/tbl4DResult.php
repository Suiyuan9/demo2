<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl4DResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'n1',
        'n2',
        'n3',
        's1',
        's2',
        's3',
        's4',
        's5',
        's6',
        's7',
        's8',
        's9',
        's10',
        's11',
        's12',
        's13',
        'c1',
        'c2',
        'c3',
        'c4',
        'c5',
        'c6',
        'c7',
        'c8',
        'c9',
        'c10',
        'dd',
        'dn',
        'day',
       
    ];

    public function tblTotoSite()
    {
        return $this->belongsToMany(tblTotoSite::class,'flag');
    }
}
