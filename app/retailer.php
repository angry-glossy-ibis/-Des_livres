<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class retailer extends Model
{
    protected $fillable = ['Title_Retailer','Site',];

    public function livre()
    {
        return $this->belongsToMany('App\Livre', 'sentences','retailer_id','livre_id');
    }

    public function sentence()
    {
        return $this->hasMany('App\sentence');
    }
}
