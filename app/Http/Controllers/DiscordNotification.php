<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DiscordNotification extends Controller
{
    public function send()
    {
        return Http::post(env('DISCORD_WEBHOOK_URL', null), [
            'content' => "Vulture embrasado!",
            'embeds' => [
                [
                    'title' => "An awesome new notification!",
                    'description' => "Discord Webhooks are great!",
                    'color' => '7506394',
                ],
            ]
        ]);
    }

    // https://devdojo.com/bobbyiliev/how-to-send-discord-notifications-with-laravel
}
