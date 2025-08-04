@extends('admin.layouts.layout')
@section('content')
      <div class="main-wrapper">
     @include('admin.layouts.sidebar')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>News</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reports</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile-friendly additional content -->
          <div class="row mt-4">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Son Aktiviteler</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Aktivite</th>
                          <th>Tarih</th>
                          <th>Durum</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Yeni kullanıcı kaydı</td>
                          <td>2024-01-15</td>
                          <td><span class="badge badge-success">Tamamlandı</span></td>
                        </tr>
                        <tr>
                          <td>Sistem güncellemesi</td>
                          <td>2024-01-14</td>
                          <td><span class="badge badge-warning">Devam ediyor</span></td>
                        </tr>
                        <tr>
                          <td>Yedekleme işlemi</td>
                          <td>2024-01-13</td>
                          <td><span class="badge badge-success">Tamamlandı</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
      </div>
      
    </div>
@endsection