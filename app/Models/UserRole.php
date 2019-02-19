<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserRole extends Model
{
    protected $fillable = ['name'];

    //admin relationship
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
