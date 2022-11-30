<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }
        protected $fillable = ['body', 'user_id', 'user_name', 'qna_id'];
    }
    