<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Santri extends Model
{
    use HasFactory,  Notifiable , HasApiTokens; 

    protected $fillable = [
        'name',
        'email',
        'password',
        
    ];

    public function tags(){
        return $this->hasMany('App\Kelas');
    }
}
