<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = ['Price', 'Condition','livre_id', 'retailer_id'];
}
