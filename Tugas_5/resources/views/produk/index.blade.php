@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{ url('admin/produk/create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah
                            Data</a>
                    </div>
                    <div class="card-bdoy">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>harga</th>
                                    <th>Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_produk as $produk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/produk', $produk->id) }}" class="btn btn-primary"><i
                                                        class="fa fa-info"></i> lihat</a>
                                                <a href="{{ url('admin/produk', $produk->id) }}/edit"
                                                    class="herf btn btn-warning"> <i class="fa fa-edit"></i> edit</a>
                                                @include('template.utils.delete', [
                                                    'url' =>url('admin/produk', $produk->id)
                                                ])
                                            </div>
                                        </td>
                                        <td>{{ $produk->nama }}</td>
                                        <td>{{ $produk->harga }}</td>
                                        <td>{{ $produk->stok }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
