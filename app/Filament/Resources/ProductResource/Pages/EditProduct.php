<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;



    protected function mutateFormDataBeforeFill(array $data): array
    {
//        $category = Product::find($data['id']);
//
//        $data['tags'] = $category->tags()->pluck('name');

        return $data;
    }
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
//        $tagList=[];
//        foreach ($data['tags'] as $tag) {
//            $idTag=Tag::firstOrCreate([
//                'name'=>$tag,
//            ],[]);
//            $tagList[]=$idTag->id;
//        }
//        $record->tags()->sync($tagList);

        return parent::handleRecordUpdate($record, $data); // TODO: Change the autogenerated stub
    }


    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
