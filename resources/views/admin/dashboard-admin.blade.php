@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-6 card p-3">
            <h3>Data Penjualan</h3>
            <canvas id="chartBarPenjualan"></canvas>
        </div>

        <div class="col-6 card p-3">
            <h3>Data Penjualan</h3>

            <div>
                <canvas id="chartPiePenjualan" style="height:10; width:10vw"></canvas>

            </div>

        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table table-bordered table-hover">
                            <thead>
                                <caption>
                                    Data Transaksi
                                </caption>
                                <tr>
                                    <th>#</th>
                                    <th>Number</th>
                                    <th>Pemesan</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($data['transaksis'] as $item)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $item->number }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            @if ($item->payment_status == '1')
                                                <button type="button" class="btn btn-sm btn-warning ">
                                                    Menunggu Pembayaran
                                                </button>
                                            @elseif($item->payment_status == '2')
                                                <button type="button" class="btn btn-sm btn-success ">
                                                    Sudah Dibayar
                                                </button>
                                            @elseif($item->payment_status == '3')
                                                <button type="button" class="btn btn-sm btn-secondary ">
                                                    Kadaluarsa
                                                </button>
                                            @elseif($item->payment_status == '4')
                                                <button type="button" class="btn btn-sm btn-danger ">
                                                    Dibatalkan
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-sm btn-info ">
                                                    Status Tidak Valid
                                                </button>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('home.bayar', $item->id) }}" class="btn btn-sm btn-primary">Bayar</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script>

        var ctx = document.getElementById('chartBarPenjualan').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($data['penjualanLabels']),
                datasets: [{
                    label: 'Data',
                    data: @json($data['penjualanData']),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


        var ctxPie = document.getElementById('chartPiePenjualan').getContext('2d');
        var myPieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: @json($data['penjualanLabels']), // Tanggal
                datasets: [{
                    label: 'Jumlah Transaksi',
                    data: @json($data['penjualanData']), // Jumlah transaksi
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw + ' transaksi';
                            }
                        }
                    }
                }
            }
        });

        $('#dataTable').DataTable();

    </script>
@endsection
