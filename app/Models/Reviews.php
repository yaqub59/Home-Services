<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = ['reviewee_id', 'reviewer_id', 'request_id', 'rating', 'comment'];

    public function request()
    {
        return $this->belongsTo(Requests::class, 'request_id');
    }
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }
    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }
}
