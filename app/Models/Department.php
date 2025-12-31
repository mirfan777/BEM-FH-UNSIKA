<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Department extends Model
{
    protected $fillable = ['name', 'description' , 'logo', 'thumbnail', 'field_id'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id');
    }
}