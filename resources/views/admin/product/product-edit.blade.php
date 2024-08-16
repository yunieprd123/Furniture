@extends('admin.layout')
@section('content')
    <h1>Tambah produk baru</h1>
    <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="">Nama Produk</label>
            <input id="" class="form-control" type="text" name="nama_produk" value="{{$product->nama_produk}}">
        </div>
        <div class="form-group mb-3">
            <label for="">Deskripsi</label>
            <input id="" class="form-control" type="text" name="deskripsi" value="{{$product->deskripsi}}">
        </div>
        <div class="form-group mb-3">
            <label for="">Harga Produk</label>
            <input id="" class="form-control" type="number" name="harga_produk" value="{{$product->harga_produk}}">
        </div>
        <div class="form-group mb-3">
            <label for="">Stok</label>
            <input id="" class="form-control" type="number" name="stok" value="{{$product->stok}}">
        </div>
        <div class="form-group mb-3">
            <label for="">Gambar Produk</label>
            <input id="" class="form-control" type="file" accept="image/*" name="gambar_produk">
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

    </form>
@endsection
