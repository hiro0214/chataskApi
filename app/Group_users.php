<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_users extends Model
{

    protected $guarded = array('id');

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function group() {
        return $this->belongsTo('App\Group');
    }
}
