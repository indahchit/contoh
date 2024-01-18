@extends('layout.app')

@section('judul','Form ubah Data')
@section('konten')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
              <form action="/item/{{$item->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="mb-3">
                            <label for="">Kode Barang</label>
                            <input value="{{$item->kodebarang}}"required name="kodebarang" type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Nama Barang</label>
                            <input value="{{ $item->namabarang }}"required name="namabarang" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Kategori</label>
                            <select name="kategori" id="" class="form-control">
                                <option value="">--Pilih Kategori--</option>
                                <option value="Makanan"{{ ($item->kategori === 'makanan') ? 'selected' : ''}}>Makanan</option>
                                <option value="NonMakanan"{{ ($item->kategori === 'Nonmakanan' ) ? 'selected' : '' }}>NonMakanan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">stok</label>
                            <input value="{{ $item->stok }}" required name="stok" type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input value="{{ $item->harga }}"required name="harga" type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <a class="btn btn-danger" href="/item">Batal</a>
                            <button type="submit" class="btn btn-success" >Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>

@endsection