<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('KaidoSetting.site_name', 'Spatie');
        $this->migrator->add('KaidoSetting.site_active', true);
    }
};
