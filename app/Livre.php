<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = ['Title_Livre','Price', 'Volume',
        'Image','Date_Reminder','Title_Retailer','Site', 'NameGenre'];
}
