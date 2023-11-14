<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'code', 'name', 'full_name', 'iso3', 'number', 'continent_code', 'display_order'];
}
