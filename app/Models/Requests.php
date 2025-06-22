<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = ['employer_id', 'service_provider_id', 'status', 'details','location'];
    public function serviceProvider()
    {
        return $this->belongsTo(User::class, 'service_provider_id');
    }
    public function review()
    {
        return $this->hasOne(\App\Models\Reviews::class, 'request_id');
    }
    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }
}
