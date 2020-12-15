@extends('layout.manajer.content')

@section('top-menu')
    <h6 class="h2 text-white d-inline-block mb-0">Ruang {{ $id_ruang }}</h6><br>
    <p class="text-dark">{{ $time }}</p>
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
                <h3 class="mb-0">Upload Bukti Ruang R{{ $id_ruang }}</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
                <form action="{{ route('cs.bukti.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p>Foto</p>
                    @error('foto[]')
                <small class="text-red">{{ $message }}</small>
                    @enderror
                      <div class="custom-file mb-2">
                        <input type="file" class="custom-file-input" name="foto[]" id="foto[]" lang="en" multiple>
                        <label class="custom-file-label" for="foto[]">Select file</label>
                    </div>
                    <p>Video</p>
                    <div class="custom-file mb-2">
                      <input type="file" class="custom-file-input" name="video" id="video" lang="en">
                      <label class="custom-file-label" for="video">Select file</label>
                  </div>
                  <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-primary mt-4" value="Upload">
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection