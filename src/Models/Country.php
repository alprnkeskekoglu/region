<?php

namespace Dawnstar\Region\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $connection = 'dawnstar_region';
    protected $table = 'countries';
    protected $guarded = ['id'];
}
