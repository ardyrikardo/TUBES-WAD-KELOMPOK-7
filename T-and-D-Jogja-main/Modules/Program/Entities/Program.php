<?php

namespace Modules\Program\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function program_type()
    {
        return $this->belongsTo(ProgramType::class);
    }

    public function program_category()
    {
        return $this->belongsTo(ProgramCategory::class);
    }

    public function program_location()
    {
        return $this->belongsTo(ProgramLocation::class);
    }

    public function program_office()
    {
        return $this->belongsTo(ProgramOffice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
