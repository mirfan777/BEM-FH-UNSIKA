<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('site_profile.logo', '');
        $this->migrator->add('site_profile.visi', '');
        $this->migrator->add('site_profile.misi', '');
        $this->migrator->add('site_profile.whatsapp', '');
        $this->migrator->add('site_profile.alamat', '');
        $this->migrator->add('site_profile.email', null);
        $this->migrator->add('site_profile.facebook', null);
        $this->migrator->add('site_profile.instagram', null);
        $this->migrator->add('site_profile.tiktok', null);
        $this->migrator->add('site_profile.youtube', null);
    }
};
