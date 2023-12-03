<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    use HasFactory;

    protected $table = 'user_types';

    public function user()
    {
        return $this->hasOne(User::class, 'user_type_id');
    }
}
