@extends('home.layout')
@section('content')
    <div class="product-section">
        <div class="container">
            <div class="row row-cols-2">


                <div class="col-4">
                    <img class="img-thumbnail shadow p-3" src="{{ asset('produk/' . $order->product->gambar_produk) }}"
                        alt="">
                </div>
                <div class="col-6">

                    <form action="{{ route('home.daftar-transaksi') }}">
                        <div class="form-group">
                            <label for="">Nama Pemesan</label>
                            <input id="" class="w-100 p-2 border border-gray-300 rounded-md" type="text"
                                value="{{ $order->user->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Total Harga</label>
                            <input id="" class="w-100 p-2 border border-gray-300 rounded-md" type="text"
                                value="{{ $order->total_price }}" readonly>

                        </div>
                        <button type="button" id="pay-button"
                            class="bg-gray-800 text-white py-2 px-4 border border-gray-500 rounded-md active:bg-gray-700 hover:bg-gray-700">Bayar</button>

                </div>

                </form>
            </div>
        </div>

    </div>
    </div>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script>
        const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();

            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function(result) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Pembayaran Berhasil!',
                        text: 'Terima kasih atas pembayaran Anda.',
                        confirmButtonText: 'OK'
                    });
                    console.log(result)
                },
                // Optional
                onPending: function(result) {
                    Swal.fire({
                        icon: 'info',
                        title: 'Pembayaran Sedang Diproses',
                        text: 'Pembayaran Anda masih dalam proses. Harap tunggu konfirmasi lebih lanjut.',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        // Redirect atau lakukan tindakan lain setelah pengguna menekan OK
                        if (result.isConfirmed) {
                            window.location.href =
                                '/daftar-transaksi'; // Ganti dengan URL halaman informasi lainnya
                        }
                    });
                    console.log(result)
                },
                // Optional
                onError: function(result) {
                    Swal.fire({
                        icon: 'info',
                        title: 'Pembayaran Sedang Diproses',
                        text: 'Pembayaran Anda masih dalam proses. Harap tunggu konfirmasi lebih lanjut.',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        // Redirect atau lakukan tindakan lain setelah pengguna menekan OK
                        if (result.isConfirmed) {
                            window.location.href =
                                '/daftar-transaksi'; // Ganti dengan URL halaman informasi lainnya
                        }
                    });
                    console.log(result)
                }
            });
        });
    </script>
@endsection
