@extends('layout.cs.content')

@section('top-menu')
<h6 class="h2 text-white d-inline-block mb-0">{{ $time }}</h6>


@endsection

@section('content')
<!-- bersih -->
<div class="row">
  <?php for($i = 0; $i < 3; $i++): ?>
<div class="col-xl-2 col-md-3 col-sm-3 col-xs-6">
    <div class="card card-stats">
      <div class="card-img-top text-center mb-1 mt-1">
        <span class="card-title text-uppercase text-default" style="font-size: 20pt; font-weight: bold">R01</span><br>
      </div>
      <!-- Card body -->
      <div class="card-body bg-gradient-green pb-1">
        <div class="row">
          <div class="col text-center">
            <span class="h2 font-weight-bold mb-0 text-white">BERSIH</span>
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
                  ...
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
  <?php endfor; ?>
</div>
@endsection