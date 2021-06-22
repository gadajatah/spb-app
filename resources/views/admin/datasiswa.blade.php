@extends('layouts.app')
@section('title-1', 'Data Siswa')
@section('title-2', 'Tabel Siswa')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title-2')</div>
                <div class="card-body">
                    <table class="table mt-3">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jenkel</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $index => $item)
                            <tr>
                                <th scope="row">{{ ++$index }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->jenkel }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->password }}</td>
                              </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection