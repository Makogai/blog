<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Spatie');
        $this->migrator->add('general.site_active', true);
        $this->migrator->add('general.instagram', 'test');
        $this->migrator->add('general.facebook', 'test');
        $this->migrator->add('general.youtube', 'test');
        $this->migrator->add('general.aboutUs', '<b>ForYouth</b>');
    }
}
