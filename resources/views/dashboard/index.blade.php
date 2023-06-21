@extends('dashboard.layouts.main')

@section('container')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">Dashboard</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      {{-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Type here..." />
        </div>
      </div> --}}
      <ul class="navbar-nav justify-content-end position-absolute top-50 end-0 translate-middle-y">
        <li class="nav-item d-flex align-items-center">
          <a href="/login" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Log Out</span>
          </a>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

{{-- <div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                  <h5 class="font-weight-bolder mb-0">
                    $53,000
                    <span class="text-success text-sm font-weight-bolder">+55%</span>
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
                  <h5 class="font-weight-bolder mb-0">
                    2,300
                    <span class="text-success text-sm font-weight-bolder">+3%</span>
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                  <h5 class="font-weight-bolder mb-0">
                    +3,462
                    <span class="text-danger text-sm font-weight-bolder">-2%</span>
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}


<div class="col-10 grid-margin transparent mt-4 ms-5">
    <div class="row">
        <div class="col-sm-6 mb-4 stretch-card transparent" >
            <div class="card card-tale" style="background: rgb(240, 208, 248)">
                <div class="card-body">
                    <p class="mb-4"><b>Anggota</b></p>
                    <br><br>
                    <h1></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4 stretch-card transparent" >
            <div class="card card-dark-blue" style="background: rgb(172, 196, 240)">
                <div class="card-body">
                    <p class="mb-4"><b>Program Kerja</b></p>
                    <br><br>
                    <h1></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4 mb-lg-0 stretch-card transparent" >
            <div class="card card-light-blue" style="background: rgb(248, 213, 213)">
                <div class="card-body">
                    <p class="mb-4"><b>Laporan</b></p>
                    <br><br>
                    <h1></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4 mb-lg-0 stretch-card transparent" >
            <div class="card card-light-blue" style="background: rgb(238, 227, 197)">
                <div class="card-body">
                    <p class="mb-4"><b>Feedback</b></p>
                    <br><br>
                    <h1></h1>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="table-responsive p-0">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Program Kerja</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama PJ</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($programs as $program)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $program->proker }}</td>
          <td>{{ $program->nama}}</td>
          <td>{{ $program->category->name }}</td>
          <td>{{ $program->tanggal}}</td>
          <td>{{ $program->deskripsi }}</td>
          <td>
            <a href="/dashboard/programs/{{ $program->id }}" class="badge bg-info">
              <i class="bi bi-eye-fill"></i>
            </a>
            <a href="/dashboard/programs/{{ $program->id }}/edit" class="badge bg-warning">
              <i class="bi bi-pencil"></i>
            </a>
            <form action="/dashboard/programs/{{ $program->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Yakin hapus data?')">
                <i class="bi bi-trash"></i>
              </button>
            </form>
          </td>
        </tr>
    @endforeach
      </tbody>
    </table>
</div> --}}


    {{-- <section>
        <div></div>
        <div class="col-md-6 grid-margin transparent mt-5">
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent" >
                    <div class="card card-tale" style="background: rgb(172, 196, 240)">
                        <div class="card-body">
                            <p class="mb-4 "><b>Jumlah Peminjam<b></p>
                            <h1></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue" style="background: rgb(172, 196, 240)">
                        <div class="card-body">
                            <p class="mb-4">Jumlah Tervalidasi</p>
                            <h1></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue" style="background: rgb(172, 196, 240)">
                        <div class="card-body">
                            <p class="mb-4">Jumlah Belum Tervalidasi</p>
                            <h1></h1>
                        </div>
                    </div>
                </div>
            </div> --}}

        {{-- <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Belum Tervalidasi</p>
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Gagal Validasi</p>
                        <h1></h1>
                    </div>
                </div>
            </div> --}}
        {{-- </div>
    </section>

</div> --}}
@endsection
