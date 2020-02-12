<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function signup(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'unique' => Str::random()
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
        $userList = User::where('unique', $request->id)->where('id','<>', $request->current)->get();
        return $userList;
    }
}
