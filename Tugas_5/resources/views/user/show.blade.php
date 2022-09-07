@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3">
            <a href="{{url('admin/user')}}" class="btn btn-primary"> Kembali</a>
            <div class="card mt-3">
                <div class="card-header">
                    Detail Data User
                </div>
                <div class="card-body">
                    <h3>{{$user->nama}}</h3>
                    <hr>
                    <p>
                        {{"@".$user->username}} |
                        Email : {{$user->email}} 
                    </p>
                    <p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection