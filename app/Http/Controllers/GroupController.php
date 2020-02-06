<?php

namespace App\Http\Controllers;

use App\Group;
use App\Group_users;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(Request $request) {
        $data = Group_users::where('user_id', $request->user_id)->with('group')->get();
        return $data;
    }

    public function create(Request $request) {
        $data = [
            'group_name' => $request->group_name
        ];
        $group = new Group;
        $group->fill($data)->save();

        foreach ($request->user_id as $user_id)
        $group->group_users()->createMany([
            [ 'user_id' => $user_id ]
        ]);
    }


}
