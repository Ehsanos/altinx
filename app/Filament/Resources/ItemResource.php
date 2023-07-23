<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Filament\Resources\ItemResource\RelationManagers;
use App\Models\Item;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemResource extends Resource
{
    protected static ?string $pluralModelLabel = 'محتويات الطلب';

    protected static ?string $model = Item::class;
    protected static ?string $navigationGroup = 'عمليات الشراء';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }


    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order.order_code')->sortable()->label('كود الطلب')->searchable(),
                Tables\Columns\TextColumn::make('product.name')->sortable()->label('اسم المنتج'),
                Tables\Columns\TextColumn::make('quantity')->label('الكمية'),
                Tables\Columns\TextColumn::make('price')->label('السعر'),
                Tables\Columns\TextColumn::make('discount')->label('نسبة الخصم'),

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
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}
