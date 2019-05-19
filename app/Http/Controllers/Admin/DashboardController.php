<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::paginate(5);
        $usersCount = User::count();
        return view('admin.dashboard', compact('users', 'usersCount'));
    }

    public function user($userId)
    {
        $findUser = null;
        if ($userId) {
            $foundUser = User::find($userId);
        }
        return view('admin.user', compact('foundUser', 'userId'));
    }


}
