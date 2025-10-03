<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use App\Settings\SiteProfile;
use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;

class ManageSiteProfile extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = SiteProfile::class;
    
    protected static ?string $title = 'Pengaturan Profil Situs';
    
    protected static ?string $navigationLabel = 'Profil Situs';
    
    protected static ?int $navigationSort = 1;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Fieldset::make('Profil Situs')
                    ->columns(1)
                    ->schema([
                        FileUpload::make('logo')
                            ->label('Logo Website')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->directory('site-profile')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg', 'image/gif'])
                            ->helperText('Format: PNG, JPG, JPEG, GIF. Maksimal 2MB')
                            ->columnSpanFull(),
                        
                        Textarea::make('visi')
                            ->label('Visi')
                            ->rows(4)
                            ->placeholder('Masukkan visi organisasi/perusahaan...')
                            ->maxLength(1000)
                            ->helperText('Maksimal 1000 karakter')
                            ->columnSpanFull(),
                        
                        Textarea::make('misi')
                            ->label('Misi')
                            ->rows(5)
                            ->placeholder('Masukkan misi organisasi/perusahaan...')
                            ->maxLength(2000)
                            ->helperText('Maksimal 2000 karakter')
                            ->columnSpanFull(),

                        Textarea::make('alamat')
                            ->label('Alamat Lengkap')
                            ->rows(3)
                            ->placeholder('Jl. Contoh No. 123, Kelurahan, Kecamatan, Kota, Provinsi, Kode Pos')
                            ->maxLength(500)
                            ->helperText('Alamat lengkap dengan kode pos')
                            ->columnSpanFull(),
                        
                        TextInput::make('whatsapp')
                            ->label('Nomor WhatsApp')
                            ->tel()
                            ->placeholder('628123456789')
                            ->prefix('+')
                            ->helperText('Format: 628123456789 (tanpa tanda +)')
                            ->maxLength(20)
                            ->columnSpanFull(),
                        
                        Placeholder::make('wa_preview')
                            ->label('Link WhatsApp')
                            ->content(function ($get) {
                                $wa = $get('whatsapp');
                                if ($wa) {
                                    return new \Illuminate\Support\HtmlString(
                                        '<a href="https://wa.me/' . $wa . '" target="_blank" class="text-blue-600 hover:text-blue-800">
                                            https://wa.me/' . $wa . '
                                        </a>'
                                    );
                                }
                                return 'Belum ada nomor WhatsApp';
                            })
                            ->columnSpanFull(),
                        
                        Textarea::make('lokasi_gmaps')
                            ->label('Google Maps Embed Code')
                            ->rows(4)
                            ->placeholder('<iframe src="https://www.google.com/maps/embed?pb=..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>')
                            ->helperText('Paste kode embed dari Google Maps. Untuk mendapatkan kode: buka Google Maps → pilih lokasi → Share → Embed → Copy HTML')
                            ->columnSpanFull(),
                        
                        TextInput::make('facebook')
                            ->label('Facebook')
                            ->url()
                            ->placeholder('https://facebook.com/username')
                            ->prefix('https://')
                            ->helperText('URL lengkap halaman Facebook')
                            ->columnSpanFull(),
                        
                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->url()
                            ->placeholder('https://instagram.com/username')
                            ->prefix('https://')
                            ->helperText('URL lengkap profil Instagram')
                            ->columnSpanFull(),
                        
                        TextInput::make('tiktok')
                            ->label('TikTok')
                            ->url()
                            ->placeholder('https://tiktok.com/@username')
                            ->prefix('https://')
                            ->helperText('URL lengkap profil TikTok')
                            ->columnSpanFull(),
                        
                        TextInput::make('youtube')
                            ->label('YouTube')
                            ->url()
                            ->placeholder('https://youtube.com/@username')
                            ->prefix('https://')
                            ->helperText('URL lengkap channel YouTube')
                            ->columnSpanFull(),
                        
                        Placeholder::make('social_preview')
                            ->label('Preview Media Sosial')
                            ->content(function ($get) {
                                $links = [];
                                $socials = [
                                    'facebook' => 'Facebook',
                                    'instagram' => 'Instagram',
                                    'tiktok' => 'TikTok',
                                    'youtube' => 'YouTube'
                                ];
                                
                                foreach ($socials as $key => $name) {
                                    $url = $get($key);
                                    if ($url) {
                                        $links[] = '<a href="' . $url . '" target="_blank" class="text-blue-600 hover:text-blue-800">' . $name . '</a>';
                                    }
                                }
                                
                                return new \Illuminate\Support\HtmlString(
                                    count($links) > 0 
                                        ? 'Link aktif: ' . implode(' | ', $links)
                                        : 'Belum ada link media sosial yang diset'
                                );
                            })
                            ->columnSpanFull(),
                    ]),
            ]);
    }
    
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('reset')
                ->label('Reset ke Default')
                ->color('gray')
                ->requiresConfirmation()
                ->modalHeading('Reset Pengaturan')
                ->modalDescription('Apakah Anda yakin ingin mengembalikan semua pengaturan ke nilai default?')
                ->modalSubmitActionLabel('Ya, Reset')
                ->action(function () {
                    $this->form->fill([
                        'logo' => '',
                        'visi' => '',
                        'misi' => '',
                        'alamat' => '',
                        'whatsapp' => '',
                        'lokasi_gmaps' => '',
                        'facebook' => null,
                        'instagram' => null,
                        'tiktok' => null,
                        'youtube' => null,
                    ]);
                    
                    \Filament\Notifications\Notification::make()
                        ->title('Berhasil direset')
                        ->success()
                        ->send();
                }),
        ];
    }

    public function getSavedNotification(): ?\Filament\Notifications\Notification
    {
        return \Filament\Notifications\Notification::make()
            ->success()
            ->title('Pengaturan berhasil disimpan')
            ->body('Profil situs telah diperbarui.');
    }
}
