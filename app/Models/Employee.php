<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class Employee extends Model
{
    use HasFactory, Searchable;

    protected $guard = 'admin';
    protected $fillable = [
        'username',
        'email',
        'name',
        'password',
        'image',
        'last_login_time',
        'last_login_ip',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        
    ];
    
    public static $rules=[
        'name' =>'required|string|max:100',
        'username'=>'required|string|max:100',
        'password'=>'required|string|min:8',
        'image'=>'nullable|string|max:100',
        
    ];

    protected $casts = [
        'username_verified_at' => 'datetime',
        'last_login_time' =>'datetime',
    ];


    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'username' => $this->username,
           
        ];
    }
    
}
