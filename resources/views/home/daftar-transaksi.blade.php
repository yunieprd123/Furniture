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
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $item->product->nama_produk }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>Rp. {{ number_format($item->product->harga_produk) }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>Rp.{{ number_format($item->total_price) }}</td>
                                <td><a href="{{ route('home.bayar',$item->id) }}" class="btn btn-primary">Bayar</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>

            </div>


        </div>
    </div>
@endsection

