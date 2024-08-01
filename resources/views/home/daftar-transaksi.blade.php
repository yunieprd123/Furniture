@extends('home.layout')
@section('title', 'Daftar Transaksi')
@section('content')
    <div class="product-section">
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Fresh and Organic</p>
                            <h1>Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive" style="margin-top:10vh;">
                <table class="table table-striped table-hover align-middle">
                    <thead >
                        <caption>
                            Data Transaksi
                        </caption>
                        <tr>
                            <th></th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama Produk</th>
                            <th>Nama Pembeli</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($transaksi as $item)
                            <tr class="table-body-row">
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $item->created_at->translatedFormat('H:i, l d F Y') }}</td>
                                <td>{{ $item->product->nama_produk }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>Rp. {{ number_format($item->product->harga_produk) }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>Rp.{{ number_format($item->total_price) }}</td>
                                <td>
                                    @if ($item->payment_status == '1')
                                        <button class="btn btn-warning">Menunggu Pembayaran</button>
                                    @elseif($item->payment_status == '2')
                                        <button class="btn btn-success">Sudah Dibayar</button>
                                    @elseif($item->payment_status == '3')
                                        <button class="btn btn-secondary">Kadaluarsa</button>
                                    @elseif($item->payment_status == '4')
                                        <button class="btn btn-danger">Batal</button>
                                    @else
                                        <button class="btn btn-info">Status Tidak Valid</button>
                                    @endif
                                </td>

                                <td><a href="{{ route('home.bayar', $item->id) }}" class="boxed-btn">Bayar</a></td>
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
