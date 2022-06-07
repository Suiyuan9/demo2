<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotoSite extends Model
{
    use HasFactory;

    protected $fillable = [
        'siteName',
        'flag',
        'country',
        'siteImage',
        'color',
       
    ];
}
