<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
   
    use HasFactory;
    protected $guarded = ['id'];
//dahil may mass assignment ^^

    public function albums() {
        return $this->hasMany('App\Models\Album');
   }
   
   
}
