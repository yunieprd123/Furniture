@extends('home.layout')
@section('content')
    <div class="product-section">
        <div class="container">
            <div class="table-responsive" style="margin-top:30vh;">
                <table class="table table-striped table-hover table-borderless table-dark align-middle">
                    <thead class="table-light">
                        <caption>
                            Data Transaksi
                        </caption>
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Nama Pembeli</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($transaksi as $item)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$item->product_id}}</td>
                                <td>{{$item->user_id}}</td>
                                <td>{{$item->total_price}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->total_price}}</td>
                                <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td scope="row">1</td>
                            <td>Produk A</td>
                            <td>Ali</td>
                            <td>100,000</td>
                            <td>2</td>
                            <td>200,000</td>
                            <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Produk B</td>
                            <td>Budi</td>
                            <td>50,000</td>
                            <td>1</td>
                            <td>50,000</td>
                            <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Produk C</td>
                            <td>Cici</td>
                            <td>75,000</td>
                            <td>3</td>
                            <td>225,000</td>
                            <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                        </tr>

                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>

            </div>


        </div>
    </div>
@endsection
