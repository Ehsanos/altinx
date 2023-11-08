<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatusEnum;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if (auth()->check()) {

            $cart = Cart::where('user_id', auth()->user()->id)->get();
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'order_code' => str_pad('NO', '3', auth()->user()->id) . rand(1000, 2000),
                'status'=>OrderStatusEnum::Wait->value,
                'total'=>$cart->sum('price'),
            ]);
            foreach ($cart as $item) {
                $items = Item::create([
                    'order_id' => $order->id,
                    'product_name' => $item->products->name,
                    'quantity' => $item->quantity,
                    'price' => $item->price


                ]);
            };
            $delet=Cart::where('user_id',auth()->user()->id)->delete();
return redirect()->route('langs.index');

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {


        $items = Item::with('product')->where('order_id', '=', $order)->get();

        $sum = 0;
        for ($i = 0; $i <= $items->count() - 1; $i++) {
            $sum = $sum + ($items[$i]->product->price * $items[$i]->quantity);

        }


        return view('pages.order-details', compact('items', 'sum'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
