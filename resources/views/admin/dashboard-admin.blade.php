@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-6 card">
            <canvas id="chartBarPenjualan"></canvas>
        </div>

        <div class="col-6">

            <canvas id="chartPiePenjualan" ></canvas>

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
    </script>
@endsection
