<?php

namespace App\Filament\Resources\Members;

use App\Filament\Resources\Members\Pages\ManageMembers;
use App\Models\Member;
use BackedEnum;
use UnitEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationParentItem = 'StrukturOrganisasi';
    
    protected static ?string $navigationLabel = 'Member';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),

                Select::make('position')
                    ->label('Posisi')
                    ->options([
                        'pengurus' => 'Pengurus',
                        'staff' => 'Staff',
                    ])
                    ->required(),

                TextInput::make('position_name')
                    ->label('Nama Posisi')
                    ->required()
                    ->maxLength(255),

                TextInput::make('npm')
                    ->label('NPM')
                    ->required()
                    ->maxLength(255),

                Select::make('division_id')
                    ->label('Division')
                    ->relationship('division', 'name')
                    ->preload()
                    ->required(),

                FileUpload::make('photo')
                    ->label('Photo')
                    ->image()
                    ->disk('public') 
                    ->visibility('public')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg', 'image/gif'])
                    ->helperText('Format: PNG, JPG, JPEG, GIF. Maksimal 2MB')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),

                TextColumn::make('position')
                    ->label('Position')
                    ->searchable(),

                TextColumn::make('npm')
                    ->label('NPM')
                    ->searchable(),

                TextColumn::make('division.name')
                    ->label('Division')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageMembers::route('/'),
        ];
    }
}
