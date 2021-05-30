<div style="width: 900px;height: 500px;margin: auto">
    <canvas id="myChart"></canvas>
</div>
@push('scripts')
    <script>
        $(function (){
            var datas = <?= json_encode($datas) ?>;
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'],
                    datasets: [{
                        label: 'Doanh thu các tháng',
                        data: datas,
                        backgroundColor: ['lightblue'],
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                          ticks:{
                              beginAtZero: true
                          }
                        }]
                    }
                }
            });
        })
    </script>
@endpush
