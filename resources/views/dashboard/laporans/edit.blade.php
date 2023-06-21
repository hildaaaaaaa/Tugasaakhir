@extends('dashboard.layouts.main')

@section('container')

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Laporan</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Edit Laporan</h6>
      </nav>
      <div class="navbar-nav justify-content-end position-absolute top-50 end-0 translate-middle-y" id="navbar">
        <ul class="navbar-nav justify-content-end">
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


  <form class="col-lg-8 mt-5 ms-5" action="/dashboard/laporans/{{ $laporan->id }}" method="post">
    @csrf
    @method('put')

    <div class=" mb-3">
      <label for="program" class="form-label">Program Kerja</label>
      <select class="form-select" name="proker_id" >
        @foreach ($programs as $program)
          @if(old('proker_id' , $laporan->proker_id) == $program->id)
            <option value="{{ $program->id }}" selected>{{ $program->proker }}</option>
          @else
          <option value="{{ $program->id }}">{{ $program->proker }}</option>
          @endif
        @endforeach
    </select>
    </div>

    <div class="mb-3">
      <label for="tanggal" class="form-label">tanggal</label>
      <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $laporan->tanggal) }}">
      @error('tanggal')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
        <label for="laporan" class="form-label">Laporan</label>
        <input type="file" class="form-control" id="laporan" name="laporan">
        @if ($laporan->laporan)
          <p>Current file: {{ $laporan->laporan }}</p>
        @endif
        @error('laporan')
          <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- <div class="mb-3">
      <label for="laporan" class="form-label">Laporan</label>
      <input type="file" class="form-control" id="laporan" name="laporan" value="{{ old('laporan', $laporan->laporan) }}">
      @error('laporan')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div> --}}
    <button type="submit" class="btn btn-primary">Save</button> <a href="{{ url()->previous() }}" class="btn btn-default btn-secondary  ms-3">Back</a>
  </form>
@endsection
