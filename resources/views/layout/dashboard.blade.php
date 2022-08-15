@extends('layout.main')
@section('content')

<div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-primary border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-white mb-0">Total Kabupaten</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">2</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="kabupaten" class="text-white">Lihat Data Kabupaten</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-info border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-white mb-0">Total Kecamatan</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">31</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="kecamatan" class="text-white">Lihat Data Kecamatan</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-primary border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h4 class="card-title text-uppercase text-white mb-0">Data variabel</h4>
                  <span class="h4 font-weight-bold mb-0 text-white">Perhitungan</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="data" class="text-white">Detail Data Perhitungan</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-default border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h4 class="card-title text-uppercase text-white mb-0">Penentuan Data</h4>
                  <span class="h4 font-weight-bold mb-0 text-white">Center</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="dataCenter" class="text-white">Detail Data Center</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-info border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h4 class="card-title  text-white mb-0">Perhihtungan</h4>
                  <span class="h4 font-weight-bold mb-0 text-white">Data</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
              <br>
              <p class="mt-3 mb-0 text-sm">
                <a href="perhitungan" class="text-white">Detail Perhitungan</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-danger border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-white mb-0">Klasifikasi</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">Map</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
              <br>
              <p class="mt-3 mb-0 text-sm">
                <a href="map" class="text-white">Detail Map</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-danger border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-white mb-0">Infromasi Developer</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">Zsazsa</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="https:www.instagram.com" target="_blank" class="text-white">Profile Devloper</a>
              </p>
            </div>
          </div>
        </div>
        
       
    </div>
    @endsection