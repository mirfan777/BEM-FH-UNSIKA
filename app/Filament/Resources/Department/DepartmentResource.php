<?php

namespace App\Filament\Resources\Department;

use App\Filament\Resources\Department\Pages\ManageDepartments;
use App\Models\Department;
use BackedEnum;
use UnitEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class DepartmentResource extends Resource
{
    protected static ?string $model = Department::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationParentItem = 'StrukturOrganisasi';
    protected static ?string $navigationLabel = 'Department';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),

                Select::make('field_id')
                    ->label('Bidang / Field')
                    ->relationship('field', 'name')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                Textarea::make('description')
                    ->label('Description')
                    ->nullable(),

                FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->disk('public') 
                    ->visibility('public')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg', 'image/gif'])
                    ->helperText('Format: PNG, JPG, JPEG, GIF. Maksimal 2MB')
                    ->nullable(),

                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->disk('public') 
                    ->visibility('public')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg', 'image/gif'])
                    ->helperText('Format: PNG, JPG, JPEG, GIF. Maksimal 2MB'),
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

                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50),
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
            'index' => ManageDepartments::route('/'),
        ];
    }
}
