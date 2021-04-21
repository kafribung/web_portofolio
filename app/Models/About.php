<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $touches  = ['user'];
    protected $fillable = ['about'];
    // Relation one to one (About to User)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
