<?php

namespace App\Notifications;

use App\Country;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AddHotel extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     public $country_id;
    public function __construct($country_id)
    {
        $this->country_id=$country_id;
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



    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $country=Country::where('id',$this->country_id)->get()->first();


        return [
            'manager_name' =>auth()->guard('admin')->user()->name,
            'manager_email'=>auth()->guard('admin')->user()->email,
            'data'=>'   Added new Hotel in '. $country->name,
            'date'=>Carbon::now(),

        ];
    }
}
