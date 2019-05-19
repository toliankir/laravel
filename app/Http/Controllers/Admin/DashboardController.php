<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard($userId = null)
    {
        $findUser = null;
        $users = User::paginate(2);
        if ($userId) {
            $findUser = User::find($userId);
        }
        return view('admin.dashboard', compact('users','userId', 'findUser'));
    }

    public function getAllUsers()
    {
        return User::all();
    }

}
