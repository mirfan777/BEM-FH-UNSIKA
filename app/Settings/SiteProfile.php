<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteProfile extends Settings
{
    public string $logo;
    public string $description;
    public string $alamat;
    public string $name;
    public string $vision;
    public string $mission;
    public string $whatsapp;  
    public string $about;
    public ?string $email;
    public ?string $twitter;
    public ?string $facebook;     
    public ?string $instagram;      
    public ?string $tiktok;       
    public ?string $youtube;      

    public static function group(): string
    {
        return 'site_profile';
    }
}