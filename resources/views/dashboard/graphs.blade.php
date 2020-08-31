@extends('layouts.app')

@section('content')
<div class="row">
    <div id="container" class="col-md-12">
        <canvas id="canvas"></canvas>
        <script>
        var color = Chart.helpers.color;
        var barChartData = {
                labels: [@foreach($visitas[1] as $data)'{{ $data }}',@endforeach],
                datasets: [{
                        label: 'Quantidade de visitas',
                        backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                        borderColor: window.chartColors.blue,
                        borderWidth: 3,
                        data: [@foreach($visitas[1] as $data)
{{ $visitas[0][$data] }}@if(next($visitas[1])),
@endif
                               @endforeach
                        ]
                },{
                        label: 'Quantidade de visitas na página principal',
                        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                        borderColor: window.chartColors.red,
                        borderWidth: 3,
                        data: [@foreach($visitasIndex[1] as $data)
{{ $visitasIndex[0][$data] }}@if(next($visitasIndex[1])),
@endif
                               @endforeach
                        ]
                }]

        };

        window.onload = function() {
                var ctx = document.getElementById('canvas').getContext('2d');
                window.myBar = new Chart(ctx, {
                        type: 'bar',
                        data: barChartData,
                        options: {
                                responsive: true,
                                legend: {
                                        position: 'top',
                                },
                                title: {
                                        display: true,
                                        text: 'Quantidade de visitas'
                                }
                        }
                });

        };
    </script>
    </div>
 </div>
<div class="row">
    <div class="col-md-12 text-center">
        <h3>Todas as visitas</h3>
    </div>
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>
                    IP
                </th>
                <th>
                    Números de acessos
                </th>
            </tr>
        @foreach($allVisitas as $visita)
            <tr>
                <td>{{ $visita->address }}</td>
                <td>{{ $visita->acessos }}</td>
            </tr>
        @endforeach
        </table>
    </div>
</div>

@endsection