<?php

namespace App\Repository;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductRepo implements ProductRepository
{
    function product()
    {
        return ProductResource::collection(Product::all());
    }

    function create($data)
    {
        $user = Auth::user();
        $str = $data->file('image')->store('public/' . $user->id);
        $path = ltrim($str, "public/");

        Product::create([
            'user_id' => $user->id,
            'title' => $data->title,
            'description' => $data->description,
            'price' => $data->price,
            'compare_price' => $data->compare_price,
            'charge_tax' => $data->charge_tax,
            'sale_channel' => $data->sale_channel,
            'vendor' => $data->vendor,
            'tags' => $data->tags,
            'images' => $path
        ]);
    }

    function find($id)
    {
        return new ProductResource(Product::find($id));
    }

    function update($data, $id)
    {
        $pro = Product::find($id);
        if ($data->image == null) {
            $path = $pro->images;
        } else {
            Storage::delete('public/' . $pro->images);
            $user = Auth::user();
            $str = $data->file('image')->store('public/' . $user->id);
            $path = ltrim($str, "public/");
        }

        Product::where('id', $id)->update([
            'title' => $data->title,
            'description' => $data->description,
            'price' => $data->price,
            'compare_price' => $data->compare_price,
            'charge_tax' => $data->charge_tax,
            'sale_channel' => $data->sale_channel,
            'vendor' => $data->vendor,
            'tags' => $data->tags,
            'images' => $path
        ]);
    }

    function delete($id)
    {
        Product::find($id)->delete();
    }
}
