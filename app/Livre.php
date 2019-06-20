<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = ['Title_Livre','Price', 'Volume',
        'Image','Title_Retailer','Site', 'NameGenre'];

    public function livres()
    {
        return $this->hasMany('App\source');
        return $this->hasMany('App\sentence');
    }
}
