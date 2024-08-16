@extends('admin.layout')
@section('content')
    <div class="table-responsive mt-5 ">
        <table class="table table-striped table-bordered shadow">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Isi Review</th>
                    <th scope="col">Produk</th>
                    <th scope="col">User</th>
                    <th scope="col">Bintang</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($reviews as $data)
                    <tr class="">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->komentar }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ $data->user->produk }}</td>
                        <td>{{ number_format($data->harga_produk) }}</td>
                        <td>{{ $data->stok }}</td>
                        <td>
                            <a href="{{ route('product.edit', $data->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('product.destroy', $data->id) }}" class="btn btn-danger">Hapus</a>

                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
