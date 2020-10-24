@extends('layouts.master')

@section('title','Data Supplier')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Data Supplier</h3>

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data_pengguna as $pengguna)
                      <tr>
                        <td>{{$pengguna->nama_lengkap}}</td>
                        <td>{{$pengguna->tanggal_lahir}}</td>
                        <td>{{$pengguna->jenis_kelamin}}</td>
                        <td>{{$pengguna->email}}</td>
                        <td>{{$pengguna->alamat}}</td>
                        <td>{{$pengguna->no_hp}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@stop
