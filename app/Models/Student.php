<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Interfaces\Personable;
use App\Models\Traits\Personable as PersonableTrait;

class Student extends Model implements Personable
{
    use PersonableTrait;
    
    protected $primaryKey = 'user_id';
    public $timestamps = false;
}
