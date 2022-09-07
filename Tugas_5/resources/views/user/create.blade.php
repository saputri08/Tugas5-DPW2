@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3">
        <a href="{{url('admin/user')}}" class="btn btn-primary"> Kembali</a>
            <div class="card mt-3">
                <div class="card-header">
                    Tambah Data User
                </div>
                <div class="card-body">
                    <form action="{{url('admin/user')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <button class="btn btn-dark float-right"><i class="fa fa-save"> Simpan</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection