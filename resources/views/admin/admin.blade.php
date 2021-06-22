@extends('layouts.app')
@section('title-1', 'Data Admin')
@section('title-2', 'Tabel admmin')

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
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $index => $item)
                            <tr> 
                                <th scope="row">{{ ++$index }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
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