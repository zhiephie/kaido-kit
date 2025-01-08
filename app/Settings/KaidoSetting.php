<?php

namespace App\Settings;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Spatie\LaravelSettings\Settings;

class KaidoSetting extends Settings
{
    public string $site_name;

    public bool $site_active;

    public static function group(): string
    {
        return 'KaidoSetting';
    }
}
