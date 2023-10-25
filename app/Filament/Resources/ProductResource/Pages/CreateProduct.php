<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function handleRecordCreation(array $data): Model
    {


//        $category = Product::create([
//            'name'=>$data['name'],
//            'is_active'=>$data['is_active'],
//            'price'=>$data['price'],
//            'length'=>$data['length'],
//            'width'=>$data['width'],
//            'height'=>$data['height'],
//            'weigth'=>$data['weigth'],
//            'area'=>$data['area'],
//            'color'=>$data['color'],
//            'description'=>$data['description'],
//
//        ]);
//        foreach ($data['tags'] as $tag) {
//            $category->tags()->create([
//                'name'=>$tag
//
//            ]);
//        }
        return $data;
    }


}
