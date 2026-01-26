@extends('layouts.layout')

@section('content')
    {{-- SECTION Menu Sebelum Main --}}
    <div class="flex">
        {{-- Fitur Cari --}}
        <livewire:search-bar />
        {{-- END Fitur Cari --}}
    </div>
    {{-- END SECTION Menu Sebelum Main --}}
    {{-- SECTION Tabel Data --}}
    <div class="flex flex-col mt-7">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8 ">
            <div class="inline-block min-w-full max-w-full rounded-xl align-middle shadow-sm ">
                <livewire:scan-product />
                <livewire:table.pos />
            </div>
        </div>
    </div>
    {{-- END SECTION Tabel Data --}}
@endsection
