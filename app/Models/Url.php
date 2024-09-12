<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;
    
    protected $fillable = ['target_url','shortened_url', 'user_id'];

    // Each URL model belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
