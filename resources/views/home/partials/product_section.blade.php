<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Produk</span> Kami</h3>
                    <p>"Dapatkan koleksi furniture elegan dan fungsional untuk setiap ruangan di rumah Anda di Menak
                        Furniture. Tambahkan sentuhan indah ke rumah Anda dengan furniture dari Menak Furniture hari
                        ini!"</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($product as $data)
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item p-3">
                        <div class="d-flex justify-content-center p-5">
                            <img src="{{ asset('produk/' . $data->gambar_produk) }}" class="img-thumbnail"
                                alt="">
                        </div>
                        <h3>{{ $data->nama_produk }}</h3>
                        <p class="product-price"><span>{{ $data->deskripsi }}</span> Rp.{{number_format($data->harga_produk)}} </p>

                        <div class="d-block my-2">
                            <a href="{{route('home.detail-product',$data->id)}}" class="cart-btn bg-primary"><i class="fa fa-eye"></i> Lihat Produk</a>

                        </div>

                        <div class="d-block my-2">
                            <a href="{{ route('home.addToCart', $data->id) }}" class="cart-btn"><i
                                    class="fas fa-shopping-cart"></i>
                                Add to Cart</a>

                        </div>

                    </div>
                </div>
            @endforeach

            {{-- <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="home/assets/img/products/produk-2.jpg"
                                alt=""></a>
                    </div>
                    <h3>Lemari Kayu Jati</h3>
                    <p class="product-price"><span>Ukuran 90 cm</span> Rp. 1.500.000 </p>
                    <div class="d-block my-2">
                        <a href="cart.html" class="cart-btn bg-primary"><i class="fa fa-eye"></i> Lihat Produk</a>

                    </div>

                    <div class="d-block my-2">
                        <a href="{{route('home.formulir')}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="home/assets/img/products/produk-3.jpg"
                                alt=""></a>
                    </div>
                    <h3>Lemari Kayu Jati</h3>
                    <p class="product-price"><span>Ukuran 90 cm</span> Rp. 1.600.000 </p>
                    <div class="d-block my-2">
                        <a href="cart.html" class="cart-btn bg-primary"><i class="fa fa-eye"></i> Lihat Produk</a>

                    </div>

                    <div class="d-block my-2">
                        <a href="{{route('home.formulir')}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
