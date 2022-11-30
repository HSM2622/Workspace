<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
      }
      protected $fillable = ['created_at','user_id',
      'DESC_KOR', 
      'ANIMAL_PLANT', 
      'SERVING_WT',
      'NUTR_CONT1',
      'NUTR_CONT2',
      'NUTR_CONT3',
      'NUTR_CONT4',
      'NUTR_CONT5',
      'NUTR_CONT6',
      'NUTR_CONT7',
      'NUTR_CONT8',
      'NUTR_CONT9'
    ];
}
