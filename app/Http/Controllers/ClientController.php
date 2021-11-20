<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ClientController extends Controller
{
    public function status(string $discordId)
    {
        $client = Client::where('discord_id', $discordId)->firstOrFail();
        $charge = Charge::where('client_id', $client->id)->first();

        Artisan::call('verify:charges');

        (new DiscordNotification)->chargeVerify($charge);
        return response()->json('Alert to discord send!');
    }
}
