<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        $user = new User();
        $user->fill($data)->save();
    }

    public function signin(Request $request) {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
            $user = Auth::user();
            return $user;
        } else {
            return 'error';
        }
    }

    public function search(Request $request) {
        $keyword = $request->name;
        $userList = User::where('name', 'like', "%{$keyword}%")->where('id','<>', $request->current)->get();
        return $userList;
    }
}
