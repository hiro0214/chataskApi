<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function group_users() {
        return $this->hasMany('App\Group_users');
    }

    public function message() {
        return $this->hasMany('App\Message');
    }

    public function task() {
        return $this->hasMany('App\Task');
    }

}
