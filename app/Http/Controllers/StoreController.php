<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function show()
    {
        $stores = Store::with('admin')->paginate(3);
        return view('store.index', 
            [
                'stores' => $stores
            ]
        );
    }

    public function view()
    {
        $stores = Store::with('admin')->paginate(3);
        return view('/admin/manage-store', 
            [
                'stores' => $stores
            ]
        );
    }
    public function store(Request $request){
        $request->validate([
            'fruit_name' => 'required',
            'fruit_price' => 'required',
            'fruit_quantity' => 'required',
            'fruit_image' => 'required',
            'fruit_description' => 'required',
        ]);

        if ($request->hasFile('fruit_image')) {
            $file = $request->file('fruit_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $path = 'uploads/category/';
            $file->move($path, $filename);
        } else {
            $filename = null;
        }

        Store::create([
            'fruit_name' => $request->fruit_name,
            'admin_id' => auth()->user()->id,
            'fruit_price' => $request->fruit_price,
            'fruit_quantity' => $request->fruit_quantity,
            'fruit_image' => $path.$filename,
            'fruit_description' => $request->fruit_description,
        ]);
        return redirect()->back()->with('success', 'Fruit details saved successfully!');
    }
    public function update(Request $request, $id)
    {
        $stores = Store::find($id);
    
        $request->validate([
            'fruit_name' => 'required',
            'fruit_price' => 'required',
            'fruit_quantity' => 'required',
            'fruit_description' => 'required',
            'fruit_image' => 'nullable|image', 
        ]);
    
        if ($request->hasFile('fruit_image')) {
            $file = $request->file('fruit_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/category/';
            $file->move($path, $filename);
    
            $stores->fruit_image = $path . $filename;
        }
    
        $stores->fruit_name = $request->fruit_name;
        $stores->fruit_price = $request->fruit_price;
        $stores->fruit_quantity = $request->fruit_quantity;
        $stores->fruit_description = $request->fruit_description;
    
        $stores->save();
    
        return redirect()->back()->with('success', 'Fruit details updated successfully!');
    }
    
}
