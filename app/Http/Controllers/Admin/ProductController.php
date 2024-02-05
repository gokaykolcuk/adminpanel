<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['is_published'] = $request->boolean('is_published');
        $data['is_featured'] = $request->boolean('is_featured');

        Product::create($data);

        return redirect()->back()->with('success', 'Başarıyla Ürün Kaydedildi.');
    }

    public function edit($id)
    {
        $prod = Product::findOrFail($id);
        return view('admin.products.edit', compact('prod'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['is_published'] = $request->boolean('is_published');
        $data['is_featured'] = $request->boolean('is_featured');

        Product::findOrFail($id)->update($data);
        return redirect()->back()->with('success', 'Başarıylayla Ürün Güncellendi.');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Silme İşlemi Başarılı');
    }
}
