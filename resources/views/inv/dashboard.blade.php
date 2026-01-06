@extends('layouts.layout')

@section('content')
    {{-- SECTION Menu --}}
    <div class="mb-3 grid">
        {{-- Export --}}
        <a class="justify-self-end flex" href="">
            <button type="button"
                class="justify-self-end py-2 px-13 bg-zinc-200 rounded font-semibold flex hover:scale-110 hover:cursor-pointer">

                <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
                </svg>
                <p class="ml-1">Export</p>

            </button>
        </a>
        {{-- END Export --}}
    </div>
    {{-- END SECTION Menu --}}
    {{-- SECTION Info Cards --}}
    <div class="mt-2 mx-5 grid grid-cols-3 gap-4 mt-7">
        <x-info-card :name="__('Penjualan Hari Ini')" :value="$daily" :money="true" />
        <x-info-card :name="__('Penjualan Minggu Ini')" :value="$weekly" :money="true" />
        <x-info-card :name="__('Penjualan 3 Bulan')" :value="$quarterly" :money="true" />
        <x-info-card :name="__('Produk Paling Laris')" :value="$best" />
        <x-info-card :name="__('Pesanan Stock Baru')" :value="$delivering" />
        <x-info-card :name="__('Produk Low Stock')" :value="$low" />
    </div>
    {{-- END SECTION Info Cards --}}
@endsection
