<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class field extends Model
{
    protected $fillable = [
        'name',
    ];

    public function departments()
    {
        return $this->hasMany(Department::class, 'field_id');
    }
}
