<?php

namespace App\Notifications;

use App\Http\Middleware\admin;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ManagerLogin extends Notification implements ShouldQueue
{

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'manager_id'=> auth()->guard('admin')->user()->id,
            'manager_name'=>auth()->guard('admin')->user()->name,
            'message'    =>    '  is Login to The System',
            'manager_email'=>auth()->guard('admin')->user()->email,
            'date'=>Carbon::now(),
        ];
    }
}
