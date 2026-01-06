@extends('layouts.layout')

@section('content')
    {{-- SECTION Menu Sebelum Main --}}
    <div class="flex">
        {{-- Button Tambah --}}
        <x-button.tambah :link="__('stock/tambah')" />
        {{-- END Button Tambah --}}
        {{-- Fitur Cari --}}
        <livewire:search-bar />
        {{-- END Fitur Cari --}}
    </div>
    {{-- END SECTION Menu Sebelum Main --}}
    {{-- SECTION Tabel Data --}}
    <livewire:table />
    {{-- END SECTION Tabel Data --}}
@endsection
