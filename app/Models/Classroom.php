<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Student;

class Classroom extends Model
{
	protected $fillable = ['name'];
    public $timestamps = false;

    public function students(): HasMany
    {
    	return $this->hasMany(Student::class);
    }
}
