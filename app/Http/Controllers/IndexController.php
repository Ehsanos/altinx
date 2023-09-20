<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Statics;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::all();
        $settings=Setting::first();
        $catigories=Category::where('is_active',true)->latest()->limit(5)->get();
        $prodcuts=Product::where('is_active',true)->latest()->limit(50)->get();
        $statics=Statics::all();
        $news=Post::latest()->limit(6)->get();
//        dd($settings->phone);
       return view('pages.index',compact('slider','settings','prodcuts','catigories','statics','news'));
    }

    public function change_lang($lang){
if(in_array($lang,['ar','es','en','du','tr'])) {
    session()->forget('lang');
    session()->put('lang', $lang);
}

        return back();
    }




    public function about()
    {
        return view('pages.about');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
