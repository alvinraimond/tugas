@extends('layouts.main')
@section('content')
<div class="container">
    <div class="center">
      <div class="col-sm-14">
        <div class="page-header-title">
          <h4 class="pull-left page-title">Data Anggota</h4>
          <ol class="breadcrumb pull-right">
            <li class="active">Data Anggota</li>
          </ol>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="mx-auto" style="width: 200px;">
        <a class="btn btn-primary" href="{{ route('admin.anggota.tambah') }}" role="button">Tambah Anggota</a>
    </div>
    <p></p>
    <!--  -->
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Daftar Anggota</h3>
          </div>

          <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nisn</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Kelas</th>
                  <th class="text-center">Jurusan</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              @foreach ($users as $user)
              <tbody>
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $user->nisn }}</td>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">{{ $user->kelas }}</td>
                    <td class="text-center">{{ $user->jurusan }}</td>
                    <td class="text-center">
                        <form action="{{ route('admin.anggota.hapus', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('admin.anggota.edit', $user->id) }}" class="btn btn-warning">edit</a>
                            <button type="submit" class="btn btn-danger">hapus</button>
                        </form>
                    </td>
                </tr>
              </tbody>
              @endforeach
            </table>
              </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
  @endsection
