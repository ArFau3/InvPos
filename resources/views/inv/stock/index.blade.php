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
    <div class="flex flex-col mt-7">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8 ">
            <div class="inline-block min-w-full max-w-full rounded-xl align-middle shadow-sm ">
                <table class="min-w-full max-w-full ">
                    {{-- SECTION Header Tabel --}}
                    <thead class="bg-zinc-200">
                        <tr>
                            <x-tabel.head :value="__('No')" class="rounded-tl-xl" />
                            <x-tabel.head :value="__('Produk')" />
                            <x-tabel.head :value="__('Stock')" />
                            <x-tabel.head :value="__('Harga')" />
                            <x-tabel.head :value="__('Diskon')" />
                            <x-tabel.head :value="__('Aksi')" class="rounded-tr-xl" />
                        </tr>
                    </thead>
                    {{-- END SECTION Header Tabel --}}
                    {{-- SECTION Body Tabel --}}
                    <livewire:table.stock />
                    {{-- END SECTION Body Tabel --}}
                </table>
            </div>
        </div>
    </div>
    {{-- END SECTION Tabel Data --}}
@endsection
