<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
         'tingkat_kelas',
         'tahun_ajaran',
         'santri_id',
        
    ];

    public function santri(){
        return $this->belongsTo('App\Santri');
    }
}
