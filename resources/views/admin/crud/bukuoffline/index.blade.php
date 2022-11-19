
@extends('layouts.main')
@section('content')

        <div class="container">
          <div class="center">
            <div class="col-sm-14">
              <div class="page-header-title">
                <h4 class="pull-left page-title">Daftar Buku Offline</h4>
                <ol class="breadcrumb pull-right">

                  <li class="active"></li>
                </ol>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="mx-auto" style="width: 200px;">
                    <a class="btn btn-primary" href="{{ route('admin.bukuoffline.create') }}" role="button">Tambah Buku</a>
                </div>
                <p></p>
          <!--  -->
          <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Buku offline</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Judul Buku</th>
                                            <th>genre</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Jumlah Halaman</th>
                                            <th>Stok Buku</th>
                                            <th>Cover Buku</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bukuoffline as $bukuofflines)
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $bukuofflines->id }}</td>
                                            <td>{{ $bukuofflines->judul_buku }}</td>
                                            <td>{{ $bukuofflines->genre }}</td>
                                            <td>{{ $bukuofflines->pengarang }}</td>
                                            <td>{{ $bukuofflines->penerbit }}</td>
                                            <td>{{ $bukuofflines->tahun_terbit }}</td>
                                            <td>{{ $bukuofflines->jumlah_halaman }}</td>
                                            <td>{{ $bukuofflines->stok_buku }}</td>
                                            <td><img src="{{ asset('images/'.$bukuofflines->cover_buku) }}" alt=""></td>
                                            <td>
                                                <form action="{{ route('admin.bukuoffline.hapus', $bukuofflines->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('admin.bukuoffline.edit', $bukuofflines->id) }}" class="btn btn-success btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                              </form>
                                              </td>
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
        @endsection
