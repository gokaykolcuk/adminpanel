@extends('layouts.admin.panel')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ürün Düzenle</h1>
        <p class="mb-4"> Bu sayfada ürün düzenle.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ürün</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.products.update', $prod->id) }}" method="POST">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group ">
                                <label for="">Ürün Adı</label>
                                <input type="text" name="name" value="{{ $prod->name }}" placeholder="Ürün Adı"
                                    class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün Fiyat</label>
                                <input type="text" name="price" value="{{ $prod->price }}" placeholder="Ürün Fiyat"
                                    class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün İndirimli Fiyat</label>
                                <input type="text" name="discount_price" value="{{ $prod->discount_price }}"
                                    placeholder="Ürün İndirimli Fiyat" class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün Stok</label>
                                <input type="text" name="stock_qty" value="{{ $prod->stock_qty }}"
                                    placeholder="Ürün İndirimli Fiyat" class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün Açıklama</label>
                                <textarea type="text" name="description" cols="10" rows="10" placeholder="Ürün İndirimli Fiyat"
                                    class="form-control "> {{ $prod->description }}  </textarea>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="form-group ">
                                <label for="">Ürün Seo Kelimeleri</label>
                                <input type="text" name="seo_keywords" value="{{ $prod->seo_keywords }}"
                                    placeholder="Ürün Seo Kelimeleri" class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün Seo Açıklama</label>
                                <textarea type="text" name="seo_description" cols="10" rows="10" placeholder="Ürün İndirimli Fiyat"
                                    class="form-control ">{{ $prod->seo_description }} </textarea>
                            </div>
                            <div class="form-group mb-2 ">
                                <label for="">Öncelik</label>
                                <input type="text" name="priority" class="form-control" value="{{ $prod->priority }}"
                                    placeholder="Ürün Öncelik">
                            </div>
                            <div class="form-group mb-2 ">
                                <label for="">Yayımlama</label>
                                <input type="checkbox" name="is_published" {{ $prod->is_published ? 'checked' : '' }}>
                            </div>
                            <div class="form-group mb-2 ">
                                <label for="">Öne Çıkar</label>
                                <input type="checkbox" name="is_featured" {{ $prod->is_featured ? 'checked' : '' }}>
                            </div>

                            <button type="submit" class="btn btn-primary mb-3"> Kaydet </button>

                        </div>
                    </div>


                </form>

            </div>
        </div>

    </div>
@endsection
