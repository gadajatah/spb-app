@extends('layouts.app')
@section('title-1', 'Tambah Siswa')
@section('title-2', 'Form Data Siswa')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mt-5">
                    <div class="card-body">
                      
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">@yield('title-2')</div>
                                        <div class="card-body">
                                                {{-- Alert Untuk Success dan Error --}}
                                                @if (session()->has('success'))
                                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                                    <strong>{{ session('success') }}</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif

                                            @if (session()->has('error'))
                                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                                    <strong>{{ session('error') }}</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif
                                            {{-- Alert Untuk Success dan Error --}}

                                            <form action="#" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-8">
                                                            <div class="mb-3 row">
                                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                                <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $students->nama }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="mb-3 row">
                                                            <label for="jenkel" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="email" name="email">
                                                            </div>
                                                            </div>
                                                    </div>
                                                     <div class="col-md-8">
                                                            <div class="mb-3 row">
                                                            <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="jenkel" name="jenkel">
                                                            </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3 row">
                                                        <label for="username" class="col-sm-2 col-form-label">Alamat</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="alamat" name="alamat">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3 row">
                                                        <label for="username" class="col-sm-2 col-form-label">No Hp</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="no_hp" name="no_hp">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3 row">
                                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="username" name="username">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3 row">
                                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="password" name="password">
                                                        </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                 <button type="submit" class="btn btn-primary text-white">Daftar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                  </div>

            </div>
        </div>
    </div>
@endsection