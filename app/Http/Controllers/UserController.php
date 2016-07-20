<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Shows the user's profile page
     *
     * @param int $id The user ID
     *
     * @return \Illuminate\View\View
     */
    public function index($id) {
        $user = User::find($id);
        return view('profile', ['user' => $user]);
    }
}
