<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ManagerLogin;


class AdminLoginNotificationController extends Controller
{

    public function notify()
    {
       $admins=Manager::role('Super Admin')->get();


       Notification::send($admins, new ManagerLogin());

       return redirect()->route('admin.roles');
    }
}
