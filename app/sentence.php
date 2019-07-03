<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sentence extends Model
{
    protected $fillable = ['Price','retailer_id','livre_id',];

    public function Livre()
    {
        return $this->belongsTo('App\Livre');
    }

    public function retailer()
    {
        return $this->belongsTo('App\retailer');
    }
}
