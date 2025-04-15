<?php

namespace App\Enums;

enum EventType: string
{
    case Exhibition2   = 'exhibition2';
    case Movie         = 'movie';
    case Combo         = 'combo';
    case ShowMusic     = 'show-music';
    case Education     = 'education';
    case Quest         = 'quest';
    case SportsGround  = 'sports-ground';
    case Actual        = 'actual';
    case Excursion     = 'excursion';
    case Gaming        = 'gaming';

    public function id(): int
    {
        return match($this) {
            self::Exhibition2   => 1,
            self::Movie         => 2,
            self::Combo         => 3,
            self::ShowMusic     => 4,
            self::Education     => 5,
            self::Quest         => 6,
            self::SportsGround  => 7,
            self::Actual        => 8,
            self::Excursion     => 9,
            self::Gaming        => 10,
        };
    }

    public static function fromValue(string $value): ?self
    {
        return collect(self::cases())
            ->first(fn($case) => $case->value === $value);
    }
}
