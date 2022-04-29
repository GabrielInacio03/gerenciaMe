@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <p> </p>
</div>
<div class="row">
    <div class="col-md-12">
        <div id="container-search" class="col-md-12">
            <h3>Filtrar por suas despesas</h3>
            <form action="/Restrito/default" method="GET">
                <input type="month" id="search" name="search" class="form-control" placeholder="Procure um Evento">
                <button type="submit" class="btn btn-primary btn-sm" title="Pesquisar">Pesquisar</button>
            </form>
        </div>

    </div>
</div>
<br>
<div class="card m-b-20">
    <div class="card-body">
        <h4 class="mt-0 header-title mb-3">Gráfico</h4>
        <hr>
        <div class="inbox-wid">
            <div class="inbox-item">
                <div class="chart-container" style="position: relative; ">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@php
    if(count($buscas) > 0)
    {
        $tipos = array_values($buscas);

        $lista = [];
        foreach($tipos as $tipo){
            $lista[] = $tipo;
        }
    }
@endphp
<script src="{{ asset('chart.js/chart.js') }}"></script>
<script>

    var ctx = document.getElementById('myChart').getContext('2d');

  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ {!! implode(",", $lista) !!} ],
        datasets: [{
            label: {{ $balanco }},
            data: [ {{ implode(",", $valores) }} ],
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
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endsection
