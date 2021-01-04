<?php

namespace Modules\Program\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
