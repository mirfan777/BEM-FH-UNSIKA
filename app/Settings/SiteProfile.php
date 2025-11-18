<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteProfile extends Settings
{
    public string $logo;
    public string $alamat;
    public string $whatsapp;  
    public ?string $email;
    public ?string $facebook;     
    public ?string $instagram;      
    public ?string $tiktok;       
    public ?string $youtube;      

    public static function group(): string
    {
        return 'site_profile';
    }
}