<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GeoCache extends Model
{
    protected $fillable = ['address', 'longitude', 'latitude'];
}
