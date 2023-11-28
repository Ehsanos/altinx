<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $pluralModelLabel = 'السلايدر الرئيسي';


    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photograph';
    protected static ?string $navigationGroup = 'السلايدر و الإحصائيات';


    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                SpatieMediaLibraryFileUpload::make('img')->collection('slider')->label('الصورة'),


                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('discrption')->required()->label('سلايدر لقسم :'),
                    Forms\Components\Radio::make('discrption')->options([
                        'main'=>"الرئيسية",
                        'product'=>"المنتجات",
                        'delegtes'=>"المندوبون",
                        'agents'=>"ألوكلاء",
                        'about'=>"من نحن",
                        'jobs'=>"الوظائف",
                        'news'=>"الأخبار",
                        'catalogs'=>"الكتالوج",
                    ]),

                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('slider'),
                Tables\Columns\TextColumn::make('discrption')->label('قسم')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
