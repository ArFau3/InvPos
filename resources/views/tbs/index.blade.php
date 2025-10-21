@extends('layouts.master')
@section('container')

<div class="conatiner-fluid content-inner py-3">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <button class="btn btn-sm btn-success d-flex align-items-center">
                                <span class="btn-inner d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus icon-20 me-2">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 5l0 14" />
                                        <path d="M5 12l14 0" />
                                    </svg>
                                    Tambah
                                </span>
                            </button>

                        </div>
                    </div>
                    <div class="row m-4">
                        <div class="mb-3 mt-3 col bg-light p-4 me-3">
                            <h6 class="mb-2">Tanggal</h6>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected="">(Semua)</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3 col bg-light p-4 me-3">
                            <h6 class="mb-2">Status</h6>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected="">(Semua)</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3 col bg-light p-4 me-3">
                            <h6 class="mb-2">Asal Kebun</h6>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected="">(Semua)</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3 col bg-light p-4">
                            <h6 class="mb-2">Kualitas</h6>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected="">(Semua)</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="table-responsive">
                            <table id="user-list-table" class="table table-hover" role="grid" data-bs-toggle="data-table">
                                <thead>
                                    <tr class="table-gray">
                                        <th>Pengepul</th>
                                        <th>Asal Kebun</th>
                                        <th>Tanggal - Jam Kirim</th>
                                        <th style="min-width: 100px">Total Berat (Kg)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbs as $data)
                                    <tr>
                                        <td>{{ $data['pengepul'] }}</td>
                                        <td>{{ $data['asal_kebun'] }}</td>
                                        <td>{{ $data['tgl_kirim'] }}</td>
                                        <td>{{ $data['total_berat'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection