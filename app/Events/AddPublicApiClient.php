<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Model\PublicClient;

class AddPublicApiClient
{
    use InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    private $client;
    private $public_client;

    public function __construct(PublicClient $public_client ,$client)
    {
        $this->public_client = $public_client;
        $this->client = $client;
        
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */

    public function addClient()
    {
        $attributes['client_web'] = $this->client;
        $attributes['name'] = '';
        try{
        $this->public_client->create($attributes);
            }
        catch(\Illuminate\Database\QueryException $e){
            return false;
        }
    }

    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
