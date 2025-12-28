<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'position', 'position_name', 'photo', 'npm', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
