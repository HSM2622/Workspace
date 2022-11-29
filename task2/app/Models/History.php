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
      protected $fillable = ['created_at','user_id', 'food'];
}
