<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = array('id');

    public function group_users() {
        return $this->hasMany('App\Group_users');
    }

    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function tasks() {
        return $this->hasMany('App\Task');
    }

}
