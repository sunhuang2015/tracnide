<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    //
    use SoftDeletes;
    protected $table="companies";

    public function department(){
        return $this->hasMany(Department::class);
    }
}
