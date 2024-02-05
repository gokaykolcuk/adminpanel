@extends('layouts.admin.panel')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ürün Ekle</h1>
        <p class="mb-4"> Bu sayfada ürün ekleyebilirsiniz.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ürün</h6>
            </div>
            <div class="card-body">

                <form action="{{route('admin.products.store')}}" method="POST">
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
                                <input type="text" name="name" placeholder="Ürün Adı" class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün Fiyat</label>
                                <input type="text" name="price" placeholder="Ürün Fiyat" class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün İndirimli Fiyat</label>
                                <input type="text" name="discount_price" placeholder="Ürün İndirimli Fiyat"
                                    class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün Stok</label>
                                <input type="text" name="stock_qty" placeholder="Ürün İndirimli Fiyat"
                                    class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün Açıklama</label>
                                <textarea type="text" name="description" cols="10" rows="10" placeholder="Ürün İndirimli Fiyat"
                                    class="form-control "> </textarea>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="form-group ">
                                <label for="">Ürün Seo Kelimeleri</label>
                                <input type="text" name="seo_keywords" placeholder="Ürün Seo Kelimeleri"
                                    class="form-control ">
                            </div>
                            <div class="form-group ">
                                <label for="">Ürün Seo Açıklama</label>
                                <textarea type="text" name="seo_description" cols="10" rows="10" placeholder="Ürün İndirimli Fiyat"
                                    class="form-control "> </textarea>
                            </div>
                            <div class="form-group mb-2 ">
                                <label for="">Öncelik</label>
                                <input type="text" class="form-control" name="priority" placeholder="Ürün Öncelik">
                            </div>
                            <div class="form-group mb-2 ">
                                <label for="">Yayımlama</label>
                                <input type="checkbox" name="is_published"  placeholder="Ürün Öncelik">
                            </div>
                            <div class="form-group mb-2 ">
                                <label for="">Öne Çıkar</label>
                                <input type="checkbox" name="is_featured"  placeholder="Ürün Yayımlama">
                            </div>

                            <button type="submit" class="btn btn-primary mb-3"> Kaydet </button>

                        </div>
                    </div>


                </form>

            </div>
        </div>

    </div>
@endsection
