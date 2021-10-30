<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WebCommands extends Controller
{
    public function verifyCharges()
    {
        $charges = Charge::all();

        foreach ($charges as $charge) {
            $validation = $charge->validate();

            if ($validation === 0) {
                # expired
                $this->sendChargeNotification($charge);
                continue;
            }

            if ($validation === 1) {
                # OK
                $this->sendChargeNotification($charge);
                continue;
            }

            if ($validation === 2) {
                # proximo a expirar
                $this->sendChargeNotification($charge);
                continue;
            }
        }

        return response([
            'message' => 'Command Complete!'
        ], Response::HTTP_OK);
    }

    public function sendChargeNotification(Charge $charge)
    {
        (new DiscordNotification)->chargeVerify($charge);
    }
}
