<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class AdminRole extends Model
{

    protected $fillable = ['name'];

    //admin relationship
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
}
