<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }

//    Laravel 会自动注入与请求 URI 中传入的 ID 对应的用户模型实例 隐性路由模型绑定
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

}
