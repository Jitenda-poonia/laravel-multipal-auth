<?php

namespace App\Http\Controllers;

use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index()
    {
        // $post = [
        //     "title" => "your welcome",
        //     'slug' => 'notification slug'
        // ];
        // $users = User::all();
        // foreach ($users as $user) {

        //     $user->notify(new WelcomeNotification($post));
        // }
        // // dd('done');
        return view("welcome");
    }
}
