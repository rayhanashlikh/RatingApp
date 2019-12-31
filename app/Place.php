<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['places_name', 'location', 'date_opened', 'description', 'picture'];
}
