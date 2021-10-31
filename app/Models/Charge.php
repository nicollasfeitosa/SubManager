<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;

    private const STATUS_EXPIRED = 0;
    private const STATUS_ACTIVE = 1;
    private const STATUS_PENDING = 2;

    protected $fillable = [
        'product_id',
        'client_id',
        'days',
        'status',
        'charged_at',
        'charged_expired',
    ];

    public function validate(): int
    {
        //$chargedExpired = Carbon::parse($this->charged_at) + days;
        $chargedExpired = Carbon::parse($this->charged_expired);
        
        $today = Carbon::now();

        if ($chargedExpired->lte($today)) {
            $this->status = self::STATUS_EXPIRED;
            $this->save();
            return self::STATUS_EXPIRED;
        }

        if ($chargedExpired->lte($today->addWeek())) {
            $this->status = self::STATUS_PENDING;
            $this->save();
            return self::STATUS_PENDING;
        }

        return self::STATUS_ACTIVE;
    }
}
