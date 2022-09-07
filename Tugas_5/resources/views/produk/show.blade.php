@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3">
            <a href="{{url('admin/produk')}}" class="btn btn-primary"> Kembali</a>
            <div class="card mt-3">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <h3>{{$produk->nama}}</h3>
                    <hr>
                    <p>
                        Rp. {{number_format($produk->harga)}} |
                        Stok : {{$produk->stok}} |
                        Berat : {{$produk->berat}} gr
                    </p>
                    <p>
                        {!! nl2br ($produk->deskripsi) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection