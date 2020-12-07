@extends('layout.manajer.content')

@section('top-menu')
<div class="col-md-4">
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-form">Tambah Ruang</button>
  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
                <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
          </div>
    <div class="card-body px-lg-5 py-lg-5">
        <div class="text-center text-muted mb-4">
            <small>Or sign in with credentials</small>
        </div>
        <form role="form">
            <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                </div>
            </div>
            <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                </label>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary my-4">Sign in</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div></div>
@endsection

@section('content')
<!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Data Ruang</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">ID</th>
                    <th scope="col" class="sort" data-sort="budget">Nama Ruang</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col" class="sort" data-sort="status">Aksi</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Argon Design System</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $2500 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Argon Design System</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $2500 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Argon Design System</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $2500 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Argon Design System</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $2500 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection