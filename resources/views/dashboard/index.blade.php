@extends('layouts.main')

@section('title', 'Dashboard')

@section('body')
<div class="container-fluid">
    <div class="row m-t-25 justify-content-between">
        <div class="col-lg-6">
            <h2 class="page-title">Dashboard</h2>
        </div>

        <div class="col-lg-3 d-none">
            <canvas id="doughutChart"></canvas>
        </div>
    </div>

    <div class="row m-t-25">
        <div class="col-lg-6">
            <div class="card currency-card-rounded">
                <div class="card-body rounded bitcoin">
                    <div class="currency-card--icon pull-right">
                        <i class="cc BTC-alt" title="BTC"></i>
                    </div>
                    <h4>Total Pengunjung</h4>
                    <h2>
                        <span>{{ $totalPengunjung }}</span> People
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card currency-card-rounded">
                <div class="card-body rounded litecoin">
                    <div class="currency-card--icon pull-right">
                        <i class="cc LTC-alt" title="LTC"></i>
                    </div>
                    <h4>Pengunjung Hari Ini</h4>
                    <h2>
                        <span>{{ $totalPengunjungNow }}</span> People
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-t-25">
        <div class="col-lg-12">
            <div class="accordion table-data">
                <div class="card rounded-0">
                    <div class="card-header">
                        <h4 class="mb-0" data-toggle="collapse" data-target="#balance-chart" aria-expanded="true" aria-controls="table-one">
                            Statistic Pengunjung
                            <i class="fa pull-right accordion__angle--animated" aria-hidden="true"></i>
                        </h4>
                    </div>
                    <div id="balance-chart" class="collapse show">
                        <div class="card-body">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
