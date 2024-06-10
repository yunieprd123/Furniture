@extends('home.layout')
@section('content')
    <div class="product-section">
        <div class="container">
            <div class="row row-cols-2">


                <div class="col-4">
                    <img class="img-thumbnail shadow p-3" src="{{asset('home/assets/img/products/produk-1.jpg')}}" alt="">
                </div>
                <div class="col-6">

                    <form action="{{route('home.daftar-transaksi')}}">
                        <div class="form-group">
                            <label for="">Nama Pemesan</label>
                            <input id="" class="form-control" type="text" name="">
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Beli</label>
                            <input id="" class="form-control w-100" type="number" name="">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
