@extends('dashboard.layouts.main')

@section('container')

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Program Kerja</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Edit Program Kerja</h6>
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


  <form class="col-lg-8 mt-5 ms-5" action="/dashboard/programs/{{ $program->id }}" method="post">
    @method('put')
    @csrf
    <div class=" mb-3">
      <label for="proker" class="form-label">Program Kerja</label>
      <input type="text" class="form-control" id="proker" name="proker" value="{{ old('proker', $program->proker) }}">
      @error('proker')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama PJ</label>
      <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $program->nama) }}">
      @error('nama')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Kategori</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
          @if(old('category_id', $program->category_id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach
    </select>
      {{-- <input type="text" class="form-control" id="" aria-describedby="emailHelp"> --}}
    </div>
    <div class="mb-3">
      <label for="tanggal" class="form-label">Tanggal</label>
      <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $program->tanggal) }}">
      @error('tanggal')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $program->deskripsi) }}">
      @error('deskripsi')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save</button> <a href="{{ url()->previous() }}" class="btn btn-default btn-secondary  ms-3">Back</a>
  </form>
@endsection
