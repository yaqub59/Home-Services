<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
    'name',
    'institute',
    'start_date',
    'end_date',
    'description',
    'user_id',
];
    protected $table = 'certificates';
}
