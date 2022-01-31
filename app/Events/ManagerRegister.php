<?php

namespace App\Events;

use Illuminate\Support\Carbon;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ManagerRegister
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    // public $user_id;

    public $name="ahmed";
    // public $data;
    // public $time;

    public function __construct($data=[])
    {

        // $this->user_id = $data['user_id'];
        $this->name = $data['manager_name'];

        // $this->post_id = $data['post_id'];
        // $this->date = date("Y-m-d", strtotime(Carbon::now()));
        // $this->time = date("h:i A", strtotime(Carbon::now()));

    }



    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */

    public function broadcastOn()
    {
        return ['Manager_Registration'];
    }

}
