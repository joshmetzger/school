<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function UserView(){
        $allData = User::all();
        return view('backend.user.view_user', compact('allData'));
    }

    public function UserAdd(){
        return view('backend.user.add_user');
    }
}