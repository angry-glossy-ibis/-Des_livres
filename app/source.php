<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class source extends Model
{
    protected $fillable = ['user_id', 'livre_id'];
//    public function user()
//    {
//        return $this->belongsTo('App\User');
//    }
//
//    public function livre()
//    {
//        return $this->belongsTo('App\livre');
//    }

    public static function Ligical_Delete(){
        return static::where('LogicalDelete',0)->get();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function livre()
    {
        return $this->belongsTo('App\Livre');
    }
}
