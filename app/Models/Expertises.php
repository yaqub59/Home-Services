<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expertises extends Model
{
    protected $table = 'expertises';
    protected $fillable = ['user_id', 'tags'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
