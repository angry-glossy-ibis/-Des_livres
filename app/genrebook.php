<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genrebook extends Model
{
    protected $fillable = ['NameGenre',];

    public function livre()
    {
        return $this->hasMany('App\Livre');
    }
}
