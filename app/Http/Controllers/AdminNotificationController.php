<?php

namespace App\Http\Controllers;

use App\Manager;
use App\Notifications\AddHotel;
use App\Notifications\ManagerLogin;
use Alert;
use Illuminate\Support\Facades\Notification;


class AdminNotificationController extends Controller
{

    public function notify()
    {
       $admins=Manager::role('Super Admin')->get();


       Notification::send($admins, new ManagerLogin());

       return redirect()->route('admin.roles');
    }

    public function addnewManager($country_id)
    {
        $admins=Manager::role(['Super Admin','manager Hotel'])->where('id', '!=', auth()->guard('admin')->user()->id)->get();
        Notification::send($admins, new AddHotel($country_id));
        Alert::toast('Hotel Created Successfully...', 'success');
        return redirect()->route('allhotels_admin');
    }


    public function markAsRead($Notify_id)
    {

        auth()->guard('admin')->user()->unreadNotifications->where('id',$Notify_id)->markAsRead();
        return back();
    }
}
