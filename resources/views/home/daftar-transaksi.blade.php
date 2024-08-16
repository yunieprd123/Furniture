@extends('home.layout')
@section('title', 'Daftar Transaksi')
@section('content')
    <div class="transaksiProduct-section">
        <div class="breadcrumb-section hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <h1>Daftar Transaksi Anda</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-8">
                    @forelse ($transaksi as $item)
                        <div class="card border shadow p-3 my-2 mb-5">
                            <div class="card-header">
                                <h5>{{ $item->order_id }}</h5>
                            </div>
                            @foreach ($item->transaksiProduct as $transaksiProduct)
                                <div class="card-body">

                                    <div class="d-flex align-items-start border-bottom pb-3">
                                        <div class="mr-5">
                                            <img src="https://www.bootdey.com/image/100x100/008B8B/000000" alt=""
                                                class="avatar-lg rounded">
                                        </div>
                                        <div class="flex-grow-1 align-self-center overflow-hidden">
                                            <div>
                                                <h5 class="text-truncate font-size-18"><a href="#"
                                                        class="text-dark">{{ $transaksiProduct->product->nama_produk }} </a>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <ul class="list-inline mb-0 font-size-16">
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="mdi mdi-trash-can-outline"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="mdi mdi-heart-outline"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Price</p>
                                                    <h5 class="mb-0 mt-2">
                                                        <span class="me-2">Rp. <span class="harga-produk"
                                                                data-price="{{ $transaksiProduct->product->harga_produk }}">{{ number_format($transaksiProduct->product->harga_produk) }}</span></span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Quantity</p>
                                                    <div class="d-inline-flex">
                                                        <input class="form-control qty-input" type="number"
                                                            name="qty_{{ $transaksiProduct->id }}"
                                                            data-id="{{ $transaksiProduct->id }}"
                                                            value="{{ $transaksiProduct->qty }}" min="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Total</p>
                                                    <h5>Rp. <span
                                                            class="total-harga">{{ number_format($transaksiProduct->product->harga_produk * $transaksiProduct->qty) }}</span>
                                                    </h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            @endforeach

                            <hr  style="height: 5px; background-color: #000;">


                            <div class="d-flex justify-content-end mr-5 px-3">
                                <h5 class="">Rp. {{$item->transaksiProduct->sum('total_price')}}</h5>
                            </div>

                            <div class="row mt-3">
                                <div class="col-6">
                                    <button class="btn btn-light text-dark shadwo border w-100">Detail</button>
                                </div>
                                <div class="col-6">
                                    <a href="{{route('home.lengkapiPembayaran', $item->id)}}" class="btn btn-dark shadwo border w-100">Bayar</a>
                                </div>
                              
                          
                             

                            </div>
                        </div>


                    @empty
                        <div class="">
                            <h3>Anda belum mempunyai transaksi apapun</h3>

                        </div>
                    @endforelse

                    <!-- end card -->



                    <div class="row my-4">
                        <div class="col-sm-6">
                            <a href="ecommerce-transaksiProducts.html" class="btn btn-link text-muted">
                                <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
                        </div> <!-- end col -->
                        {{-- <div class="col-sm-6">
                            <div class="text-sm-end mt-2 mt-sm-0">
                                <a href="ecommerce-checkout.html" class="btn btn-success">
                                    <i class="mdi mdi-cart-outline me-1"></i> Checkout </a>
                            </div>
                        </div> <!-- end col --> --}}
                    </div> <!-- end row-->
                </div>

                <div class="col-xl-4">
                    <div class="mt-5 mt-lg-0">
                        <div class="card border shadow-none">
                            <div class="card-header bg-transparent border-bottom py-3 px-4">
                                <h5 class="font-size-16 mb-0">Order Summary <span class="float-end">#MN0124</span></h5>
                            </div>
                            <div class="card-body p-4 pt-2">

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td>Sub Total :</td>
                                                <td class="text-end">$ 780</td>
                                            </tr>
                                            <tr>
                                                <td>Discount : </td>
                                                <td class="text-end">- $ 78</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping Charge :</td>
                                                <td class="text-end">$ 25</td>
                                            </tr>
                                            <tr>
                                                <td>Estimated Tax : </td>
                                                <td class="text-end">$ 18.20</td>
                                            </tr>
                                            <tr class="bg-light">
                                                <th>Total :</th>
                                                <td class="text-end">
                                                    <span class="fw-bold">
                                                        $ 745.2
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->




        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all quantity input fields
        const qtyInputs = document.querySelectorAll('.qty-input');

        qtyInputs.forEach(function(input) {
            input.addEventListener('input', function() {
                const id = this.getAttribute('data-id');
                const quantity = parseInt(this.value);
                const priceElement = this.closest('.row').querySelector('.harga-produk');
                const price = parseInt(priceElement.getAttribute('data-price'));
                const totalElement = this.closest('.row').querySelector('.total-harga');

                // Calculate total
                const total = price * quantity;

                // Format and update total
                totalElement.textContent = total.toLocaleString('id-ID');
            });
        });
    });
</script>
