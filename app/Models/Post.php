<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    /**
     * Get user of the post from users
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
