@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3">
        <a href="{{url('admin/produk')}}" class="btn btn-primary"> Kembali</a>
            <div class="card mt-3">
                <div class="card-header">
                    Tambah Data Produk
                </div>
                <div class="card-body">
                    <form action="{{url('admin/produk')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga</label>
                                    <input type="text" class="form-control" name="harga">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Berat</label>
                                    <input type="text" class="form-control" name="berat">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Stock</label>
                                    <input type="text" class="form-control" name="stok">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-save"> Simpan</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection