<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserFollowNotification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function notify()
    {
        if (auth()->user()) {
            $user = User::first();
            auth()->user()->notify(new UserFollowNotification($user));
        }
        dd('done');
    }
}
