@extends('layout.body')

@section('konten')
<link rel="stylesheet" href="{{ asset('assetsadmin/vendor/css/pages/cards-advance.css') }}" />
<link rel="stylesheet" href="{{ asset('assetsadmin/vendor/libs/typeahead-js/typeahead.css') }}" />
<link rel="stylesheet" href="{{ asset('assetsadmin/vendor/libs/apex-charts/apex-charts.css') }}" />

<div class="row">
    <!-- Card Statistik -->
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card text-center shadow-sm border-0">
            <div class="card-body">
                <span class="badge bg-label-primary rounded-pill p-3 mb-2">
                    <i class="ti ti-users ti-sm"></i>
                </span>
                <h3 class="fw-bold">{{ $jmlh_akun }}</h3>
                <p class="mb-0">Total Akun User</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card text-center shadow-sm border-0">
            <div class="card-body">
                <span class="badge bg-label-warning rounded-pill p-3 mb-2">
                    <i class="ti ti-shopping-cart ti-sm"></i>
                </span>
                <h3 class="fw-bold">{{ $jmlh_pembelian }}</h3>
                <p class="mb-0">Total Pembelian Paket</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card text-center shadow-sm border-0">
            <div class="card-body">
                <span class="badge bg-label-success rounded-pill p-3 mb-2">
                    <i class="ti ti-link ti-sm"></i>
                </span>
                <h3 class="fw-bold">{{ $jmlh_firebase }}</h3>
                <p class="mb-0">Total Link Firebase</p>
            </div>
        </div>
    </div>

    <!-- Banner -->
    <div class="col-lg-12">
        <div class="card border-0 shadow-sm overflow-hidden">
            <div class="row g-0 align-items-center">
                <div class="col-md-7 p-4">
                    <h5 class="fw-bold mb-2">BeAD Outbound 🎉</h5>
                    <h4 class="text-primary mb-4">"Petualangan Seru dan Tak Terlupakan Bersama Kami"</h4>
                    <a href="{{ url('/tentang-kami') }}" class="btn btn-primary">Selengkapnya</a>
                </div>
                <div class="col-md-5 text-center">
                    <img src="{{ asset('assetsadmin/img/outbound-banner.png') }}" alt="Outbound" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vendors JS -->
<script src="{{ asset('assetsadmin/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assetsadmin/js/cards-statistics.js') }}"></script>
@endsection
