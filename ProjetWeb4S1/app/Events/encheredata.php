<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use App\enchere;

class encheredata implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $pseudo;
    protected $prix;

    public function __construct(enchere $enchere,$pseudo,$prix)
    {
        $this->enchere= $enchere;
        $this->pseudo= $pseudo;
        $this->prix= $prix;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new Channel('post.'.$comment->posts->id);
                // return new PrivateChannel ('tasks');
                return ['tasks'];

    }
    public function broadcastWith(){
        return array (
            'new_price' => $this->enchere->prix,
            'pseudo' => $this->pseudo,
        );
    }
}
