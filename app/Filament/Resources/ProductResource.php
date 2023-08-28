<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Department;
use App\Models\Product;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;

class ProductResource extends Resource
{
    public function isTableSearchable(): bool
    {
        return true;
    }
    protected static ?string $model = Product::class;
    protected static ?string $navigationGroup = 'المنتجات';
    protected static ?string $pluralModelLabel = 'المنتجات';

    protected static ?string $navigationIcon = 'heroicon-o-color-swatch';

    protected static ?int $navigationSort = 3;



    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Card::make()->schema([
                    Forms\Components\Toggle::make('is_active')->label('متوفر'),
                    SpatieMediaLibraryFileUpload::make('img')->collection('products')->label('الصورة')->imageCropAspectRatio('1:1')->hint('يجي ان يكون قياس الصورة متناسق'),

                ]),


                Forms\Components\Section::make('المنتج')->schema([
                    Forms\Components\Wizard::make()->schema([

                        Forms\Components\Wizard\Step::make("AR")->schema([
                            Forms\Components\Card::make()->schema([
                                Forms\Components\TextInput::make('name')->label('اسم المنتج بالعربي')->required(),
                                Forms\Components\TextInput::make('marke_ar')->label('علامة المنتج بالعربي')->required(),
                                Forms\Components\RichEditor::make('description')->label('توصيف المنتج بالعربي'),


                            ]),
                        ]),
                        Forms\Components\Wizard\Step::make("EN")->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_en')->label('اسم EN'),
                            Forms\Components\TextInput::make('marke_en')->label('ماركة EN'),
                            Forms\Components\RichEditor::make('description')->label('توصيف EN'),


                        ])]),
                        Forms\Components\Wizard\Step::make("TR")->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_tr')->label('اسم TR'),
                            Forms\Components\TextInput::make('marke_tr')->label('ماركة TR'),
                            Forms\Components\RichEditor::make('description_tr')->label('وصف TR'),


                        ])]),
                        Forms\Components\Wizard\Step::make("ES")->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_es')->label('اسم ES'),
                            Forms\Components\TextInput::make('marke_es')->label('ماركة ES'),
                            Forms\Components\RichEditor::make('description_es')->label('توصيف ES'),


                        ])]),
                        Forms\Components\Wizard\Step::make("DU")->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_du')->label('اسم DU'),
                            Forms\Components\TextInput::make('marke_du')->label('ماركة DU'),
                            Forms\Components\RichEditor::make('description_du')->label('وصف DU'),


                        ])]),

                    ])->skippable(),

                ]),


                Forms\Components\Section::make('مواصفات أخرى')->schema([
                    Forms\Components\Card::make()->schema([
                        Forms\Components\Select::make('department_id')->options(Department::all()->pluck("name", "id"))->required()->label('القسم'),
                        Forms\Components\TextInput::make('code'),
                        Forms\Components\TextInput::make('price'),
                        Forms\Components\TextInput::make('pakcing'),
                        Forms\Components\TextInput::make('length'),
                        Forms\Components\TextInput::make('width'),
                        Forms\Components\TextInput::make('height'),
                        Forms\Components\TextInput::make('weigth'),
                        Forms\Components\TextInput::make('area'),
                        Forms\Components\ColorPicker::make('color'),
                    ])->columns(4),

                ]),


                Forms\Components\TagsInput::make('tags')->label('كلمات مفتاحية'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([


                Tables\Columns\TextColumn::make('name')->label('اسم المنتج')->searchable(),
                Tables\Columns\TextColumn::make('department.name')->label('القسم')->searchable(),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('متوفر'),
                Tables\Columns\TextColumn::make('description')->words(5)->label('وصف')->searchable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('products')->label('صورة المنتج'),
                Tables\Columns\ColorColumn::make('color')->copyable()
                    ->copyMessage('تم نسخ رقم اللون')->label('لون المنج'),
                Tables\Columns\TextColumn::make('pakcing')->label('التعبئة')->searchable(),


                Tables\Columns\TagsColumn::make('tags.name')->label('كلمات مفتاحية')->searchable(),


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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
