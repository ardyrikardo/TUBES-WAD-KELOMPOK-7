<?php

namespace Modules\Program\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramOffice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function program_location()
    {
        return $this->belongsTo(ProgramLocation::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
