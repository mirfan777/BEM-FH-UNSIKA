<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Division extends Model
{
    protected $fillable = ['name', 'description' , 'logo', 'thumbnail'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

}
