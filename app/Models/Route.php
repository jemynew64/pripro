<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'frequency',
        'max_hour',
        'turn_id',       
    ];

    public function turn()
    {
        return $this->belongsTo(turn::class, 'turn_id');
    }
}
