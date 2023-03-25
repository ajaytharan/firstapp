<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\catagory;

use App\Models\product;

class AdminController extends Controller
{

    public function view_catagory()
    {

        $data = catagory::all();

        return view('admin.view_catagory', compact('data'));
    }


    public function add_catagory(Request $request)
    {

        $data = new catagory;

        $data->catagory_name = $request->catagory;

        $data->save();

        return redirect()->back()->with('message', 'catagory added successfully');
    }

    public function delete_catagory($id)
    {
        $data = catagory::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'catagory deleted');
    }

    public function view_product()
    {
        $catagory = catagory::all();

        return view('admin.view_product', compact('catagory'));
    }

    public function add_product(Request $request)
    {
        $product = new product();

        $product->title = $request->title;
        $product->discription = $request->discription;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->quality = $request->quantity;
        $product->catagory = $request->catagory;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('product_image', $imagename);

        $product->image = $imagename;

        $product->save();

        return redirect()->back();
    }
}
// ->with('message', 'Product Added successfully...')
