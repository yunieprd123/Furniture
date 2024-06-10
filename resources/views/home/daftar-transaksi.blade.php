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
                        <tr>
                            <td scope="row">4</td>
                            <td>Produk D</td>
                            <td>Dewi</td>
                            <td>120,000</td>
                            <td>1</td>
                            <td>120,000</td>
                            <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td>Produk E</td>
                            <td>Eko</td>
                            <td>90,000</td>
                            <td>4</td>
                            <td>360,000</td>
                            <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                        </tr>
                        <tr>
                            <td scope="row">6</td>
                            <td>Produk F</td>
                            <td>Fani</td>
                            <td>110,000</td>
                            <td>2</td>
                            <td>220,000</td>
                            <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                        </tr>
                        <tr>
                            <td scope="row">7</td>
                            <td>Produk G</td>
                            <td>Gilang</td>
                            <td>80,000</td>
                            <td>5</td>
                            <td>400,000</td>
                            <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                        </tr>
                        <tr>
                            <td scope="row">8</td>
                            <td>Produk H</td>
                            <td>Hana</td>
                            <td>95,000</td>
                            <td>2</td>
                            <td>190,000</td>
                            <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                        </tr>
                        <tr>
                            <td scope="row">9</td>
                            <td>Produk I</td>
                            <td>Indra</td>
                            <td>130,000</td>
                            <td>1</td>
                            <td>130,000</td>
                            <td><a href="{{ route('home.formulir') }}" class="btn btn-primary">Bayar</a></td>
                        </tr>
                        <tr>
                            <td scope="row">10</td>
                            <td>Produk J</td>
                            <td>Joko</td>
                            <td>70,000</td>
                            <td>3</td>
                            <td>210,000</td>
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
