<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    // Easy creation of model instances
    use HasFactory;
    
    // Array with attributes
    // Can be passed as part of an array to create or update the model
    protected $fillable = ['target_url','shortened_url', 'user_id'];

    // Each URL model belongs to a user. 
    // Allows access to to user using $url->user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
