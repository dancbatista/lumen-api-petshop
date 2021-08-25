<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public $timestamps = false;
    protected $fillable = ["name", "phone"];

    public function pets()
    {
        return $this->hasMany(Owner::class);
    }
}
