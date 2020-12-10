<?php

namespace App\Events;

use App\Account;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AccountSuccessEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['user.'.$this->user->id];
        return new PrivateChannel('user.'.$this->user->id);
    }

    public function broadcastAs(){
        return 'user-account-event';
    }

    public function broadcastWith(){
        return [
            'account'                   =>  $this->user->Account()->where('status',2)->count(),
            'account_checkpoint'        =>  $this->user->Account()->where('status', 7)->count(),
            'total_account_complete'    =>  Account::where('status',2)->count(),
            'total_account_checkpoint'  =>  Account::where('status',7)->count(),
        ];
    }


}
