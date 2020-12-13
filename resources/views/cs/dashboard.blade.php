@extends('layout.cs.content')

@section('top-menu')
<h6 class="h2 text-white d-inline-block mb-0">{{ $time }}</h6>


@endsection

@section('content')
<!-- bersih -->
<div class="row">
  @foreach ($jadwal as $ruang)
  <div class="col-xl-2 col-md-3 col-sm-3 col-xs-6">
    <div class="card card-stats">
      <div class="card-img-top text-center mb-1 mt-1">
      <span class="card-title text-uppercase text-default" style="font-size: 20pt; font-weight: bold">R{{ $ruang->id_ruang }}</span><br>
      </div>
      <!-- Card body -->
      <div class="card-body bg-gradient-red pb-1">
        <div class="row">
          <div class="col text-center">
            <span class="h2 font-weight-bold mb-0 text-white">BELUM BERSIH</span>
          </div>
        </div>
        <p class="mt-1 mb-0 text-center">
          <button class="btn btn-sm btn-icon btn-neutral" data-toggle="modal" data-target="#modalImg">
            <span class="btn-inner--icon"><i class="ni ni-camera-compact"></i></span>
            <span class="btn-inner--text">Bukti</span>
          </button>
          <!-- Modal -->
          <div class="modal fade mb-0" id="modalImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header col-xl-12">
                  <h5 class="modal-title" id="exampleModalLabel">Upload Bukti</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col">
                      <div id="buktiCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#buktiCarousel" style="background-color: #5e72e4" data-slide-to="0" class="active"></li>
                          <li data-target="#buktiCarousel" style="background-color: #5e72e4" data-slide-to="1"></li>
                          <li data-target="#buktiCarousel" style="background-color: #5e72e4" data-slide-to="2"></li>
                          <li data-target="#buktiCarousel" style="background-color: #5e72e4" data-slide-to="3"></li>
                          <li data-target="#buktiCarousel" style="background-color: #5e72e4" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('assets/img/theme/no_image.png') }}" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/img/theme/no_image.png') }}" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/img/theme/no_image.png') }}" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/img/theme/no_image.png') }}" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/img/theme/no_image.png') }}" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" style="background-image: linear-gradient(to right, #5e72e4, transparent);"  href="#buktiCarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" style="background-image: linear-gradient(to left, #5e72e4, transparent);" href="#buktiCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                </div>
                {{-- form upload --}}
                <div class="row mt-5">
                  <div class="col">
                    <p class="text-red"><b>Upload minimal 1 file *</b></p>
                    {{-- form here --}}
                  <form action="{{ route('cs.dashboard') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="custom-file mt-2">
                        <input type="file" class="custom-file-input" name="bukti1" id="bukti1" lang="en">
                        <label class="custom-file-label" for="bukti1">Select file</label>
                    </div>
                        <div class="custom-file mt-2">
                            <input type="file" class="custom-file-input" name="bukti2" id="bukti2" lang="en">
                            <label class="custom-file-label" for="bukti2">Select file</label>
                        </div>
                        <div class="custom-file mt-2">
                          <input type="file" class="custom-file-input" name="bukti3" id="bukti3" lang="en">
                          <label class="custom-file-label" for="bukti3">Select file</label>
                      </div>
                      <div class="custom-file mt-2">
                        <input type="file" class="custom-file-input" name="bukti4" id="bukti4" lang="en">
                        <label class="custom-file-label" for="bukti4">Select file</label>
                    </div>
                    <div class="custom-file mt-2">
                      <input type="file" class="custom-file-input" name="bukti5" id="bukti5" lang="en">
                      <label class="custom-file-label" for="bukti5">Select file</label>
                  </div>
                  <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-primary mt-4" value="Upload">
                  </div>
                    </form>
                  </div>
                </div>
                {{-- endform --}}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </p>
      </div>
    </div>
  </div>
  @endforeach
{{-- 

  <!-- belum bersih -->
  <div class="col-xl-2 col-md-3 col-sm-3 col-xs-6">
    <div class="card card-stats shadow">
      <div class="card-img-top text-center mb-1 mt-1">
        <span class="card-title text-uppercase text-default" style="font-size: 20pt; font-weight: bold">R01</span><br>
      </div>
      <!-- Card body -->
      <div class="card-body bg-gradient-red">
        <div class="row">
          <div class="col text-center">
            <span class="h2 font-weight-bold mb-0 text-white">BELUM <br> BERSIH</span>
          </div>
        </div>
        <p class="mt-1 mb-1 text-center"></p>
      </div>
    </div>
  </div>
</div> --}}
@endsection