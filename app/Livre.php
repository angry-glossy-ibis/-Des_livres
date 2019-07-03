<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = ['Title_Livre', 'Volume',
        'Image', ];

    public function retailer()
    {
        return $this->belongsToMany('App\retailers', 'sentences','livre_id','retailer_id');
    }

    public function genrebook()
    {
        return $this->belongsTo('App\genrebook');
    }

    public function user()
    {
        return $this->belongsToMany('App\User', 'sources','livre_id','user_id');
    }

    public function sentence()
    {
        return $this->hasMany('App\sentence');
    }
}
