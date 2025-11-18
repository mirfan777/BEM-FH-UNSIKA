<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'position', 'position_name', 'photo', 'npm', 'division_id'];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
