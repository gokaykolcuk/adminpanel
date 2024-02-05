@extends('layouts.admin.panel')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <h1 class="h3 text-gray-800">Ürünler</h1>
        <p class="mb-2"> Bu sayfada ürünler gösteriliyor.

        <div class="row">
            <div class="col-md-12 text-right">
                <a href="{{ route('admin.products.create') }}" class="btn btn-warning mb-3">Ürün Ekle</a>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ürünler Listesi</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ad</th>
                                <th>Fiyat</th>
                                <th>İndirimli Fiyat</th>
                                <th>Stok Adedi</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>Düzenle</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Ad</th>
                                <th>Fiyat</th>
                                <th>İndirimli Fiyat</th>
                                <th>Stok Adedi</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td> {{ $product->id }}</td>
                                    <td> {{ $product->name }} </td>
                                    <td> {{ $product->price }} </td>
                                    <td> {{ $product->discount_price }} </td>
                                    <td> {{ $product->stock_qty }} </td>
                                    <td> {{ $product->created_at->format('d/m/Y H:i:s') }} </td>
                                    <td>
                                        <a href="{{ route('admin.products.edit', $product->id) }}"
                                            class="btn btn-primary">Düzenle</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Sil</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                {{ $products->links() }}

            </div>
        </div>

    </div>
@endsection
