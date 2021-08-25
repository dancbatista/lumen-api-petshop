<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $timestamps = false;
    protected $fillable = ["name", "age", "kind", "race"];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
