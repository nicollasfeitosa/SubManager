<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Charge;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class DiscordNotification extends Controller
{
    public const SUCCESS_COLOR = 2346847;
    public const WARN_COLOR = 14730290;
    public const DANGER_COLOR = 14694706;
    public const ICON_URL = "https://pbs.twimg.com/profile_images/1458401240661041152/LIPqT5i__400x400.jpg";
    public const AVATAR_URL = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.complex.com%2Fcomplex%2Fimages%2Fc_fill%2Cg_center%2Cw_1200%2Ffl_lossy%2Cpg_1%2Cq_auto%2Fmqlimq5ifprz3klcoxpt%2Fspotify-logo&f=1&nofb=1";


    public function test()
    {
        return Http::post(env('DISCORD_WEBHOOK_URL', null), [
            'content' => "Ping!",
            'embeds' => [
                [
                    'title' => "Nicollas Dev!",
                    'description' => "Pong!",
                    'color' => '7506394',
                ],
            ]
        ]);
    }

    public function charged(Charge $charge)
    {
        $product = Product::findOrFail($charge->product_id);
        $discord_webhook_url = $product->discord;

        $clientName = Client::findOrFail($charge->client_id)->name;
        $expiredAt = Carbon::parse($charge->charged_expired)->timezone('America/Sao_Paulo')->format('d/m/Y H:i');

        $json = [
            "content" => null,
            "embeds" => [
                [
                    "title" => "Recarga realizada com sucesso!",
                    "description" => "Nicollas realizou uma recarga!",
                    "color" => self::SUCCESS_COLOR,
                    "fields" => [
                        [
                            "name" => "Nome",
                            "value" => $clientName
                        ],
                        [
                            "name" => "Dias",
                            "value" => $charge->days
                        ],
                        [
                            "name" => "Expira em",
                            "value" => $expiredAt
                        ]
                    ],
                    "author" => [
                        "name" => $product->name
                    ],
                    "footer" => [
                        "text" => "Realizado em",
                        "icon_url" => self::ICON_URL
                    ],
                    "timestamp" => $charge->charged_at
                ]
            ],
            "username" => "Spotify Alert Sender",
            "avatar_url" => self::AVATAR_URL
        ];

        return Http::post($discord_webhook_url, $json);
    }

    public function chargeVerify(Charge $charge)
    {
        $product = Product::findOrFail($charge->product_id);
        $discord_webhook_url = $product->discord;

        $client = Client::findOrFail($charge->client_id);
        $chargedAt = Carbon::parse($charge->charged_at)->timezone('America/Sao_Paulo')->format('d/m/Y H:i');
        $expiredAt = Carbon::parse($charge->charged_expired)->timezone('America/Sao_Paulo')->format('d/m/Y H:i');

        $remaningsDays = Carbon::now()->diffInDays(Carbon::parse($charge->charged_expired));

        $status = intval($charge->status);

        if ($status === 0) {
            $title = "$client->name sua recarga expirou!";
            $color = self::DANGER_COLOR;
        }

        if ($status === 1) {
            $title = "Recarga de $client->name";
            $color = self::SUCCESS_COLOR;
        }

        if ($status === 2) {
            $title = "$client->name sua recarga vai expirar em breve!";
            $color = self::WARN_COLOR;
        }

        $json = [
            "content" => "<@$client->discord_id>",
            "embeds" => [
                [
                    "title" => $title,
                    "color" => $color,
                    "fields" => [
                        [
                            "name" => "Nome",
                            "value" => $client->name
                        ],
                        [
                            "name" => "Recarga inicial",
                            "value" => "Dias: $charge->days \n Realizada em: $chargedAt"
                        ],
                        [
                            "name" => "Dias restantes",
                            "value" => "$remaningsDays dias"
                        ],
                        [
                            "name" => "Expira em",
                            "value" => $expiredAt
                        ]
                    ],
                    "author" => [
                        "name" => "Spotify Premium"
                    ],
                    "footer" => [
                        "text" => "Consultado",
                        "icon_url" => "https://cdn.discordapp.com/avatars/233677267975274496/1348258bac45dbb64d549df29e50910a.webp?size=24"
                    ],
                    "timestamp" => Carbon::now()
                ]
            ],
            "username" => "Spotify Alert Sender",
            "avatar_url" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.complex.com%2Fcomplex%2Fimages%2Fc_fill%2Cg_center%2Cw_1200%2Ffl_lossy%2Cpg_1%2Cq_auto%2Fmqlimq5ifprz3klcoxpt%2Fspotify-logo&f=1&nofb=1"
        ];

        return Http::post($discord_webhook_url, $json);
    }

    // https://devdojo.com/bobbyiliev/how-to-send-discord-notifications-with-laravel
}
