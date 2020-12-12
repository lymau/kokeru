@extends('layout.manajer.content')

@section('top-menu')
    <a href="{{ route('manajer.jadwal.add') }}" class="btn btn-secondary">+ Tambah Jadwal</a>
    <h6 class="h2 text-white d-inline-block mb-0">{{ $time }}</h6>
@endsection

@section('content')
<!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <span class="alert-text">{{ session('success') }}</span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          @if(session('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <span class="alert-text">{{ session('failed') }}</span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <div class="card pb-5">
            <!-- Card header -->
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Kelola Jadwal</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection