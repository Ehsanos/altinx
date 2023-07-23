<?php

namespace App\Filament\Resources;

use App\Enums\OrderStatusEnum;
use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $pluralModelLabel = 'الطلبات';


    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-sort-descending';
    protected static ?string $navigationGroup = 'عمليات الشراء';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('order_code')->label('كود الطلب'),
                Forms\Components\TextInput::make('discount')->numeric()->label('خصم%'),
                Forms\Components\Select::make("status")->label('حالة الطلب')->options([
                    OrderStatusEnum::Cancelled->value=>OrderStatusEnum::Cancelled->getValue(),
                    OrderStatusEnum::Wait->value=>OrderStatusEnum::Wait->getValue(),
                    OrderStatusEnum::Success->value=>OrderStatusEnum::Success->getValue(),
                ]) ,
                Forms\Components\TextInput::make('result'),
                Forms\Components\TextInput::make('total'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('اسم الزبون'),
                Tables\Columns\TextColumn::make('order_code')->label('كود الطلب'),
                Tables\Columns\TextColumn::make('discount')->label('نسبة الخصم'),
                Tables\Columns\TextColumn::make('status')->enum([

                        OrderStatusEnum::Cancelled->value=>OrderStatusEnum::Cancelled->getValue(),
                        OrderStatusEnum::Wait->value=>OrderStatusEnum::Wait->getValue(),
                        OrderStatusEnum::Success->value=>OrderStatusEnum::Success->getValue(),


                ])->label('حالة الطلب'),
                Tables\Columns\TextColumn::make('result')->label('السعر قبل الخصم'),
                Tables\Columns\TextColumn::make('total')->label('جمالي الفاتورة'),

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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
