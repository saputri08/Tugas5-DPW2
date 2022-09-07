<form action="{{$url }}" method="post" class="form-inline" onsubmit="return confirm('bace benar benar sebelum ngapus nan!!')">
    @csrf
    @method('delete')
    <button class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></button>
</form>
