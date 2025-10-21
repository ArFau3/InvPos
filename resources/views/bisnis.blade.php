@extends('layouts.master')
@section('container')
    <div class="conatiner-fluid content-inner py-3">
        <div>
            {{-- SECTION 3 Card Info --}}
            <div class="row">
                <x-card.dashboard-card :value="$lap_masuk . '/Hari ini'" :subtitle="__('Laporan Masuk')" />
                <x-card.dashboard-card :value="$cpo . '/Hari ini'" :subtitle="__('CPO Terdistribusi')" />
                <x-card.dashboard-card :value="'Rp.' . $harga" :subtitle="__('Harga Per Jam')" />
                {{-- TODO: aktifkan intl id php.ini untuk pakai Currency --}}
                {{-- @if ($harga >= 0)
                <x-card.dashboard-card :value="Number::currency($harga, 'IDR', 'id')" :subtitle="__('Harga Per Jam')" />
            @else
                <x-card.dashboard-card :value="'(' . Number::currency($harga, 'IDR', 'id') . ')'" :subtitle="__('Harga Per Jam')" />
            @endif --}}
            </div>
            {{-- END SECTION 3 Card Info --}}
            {{-- SECTION Graph & Articles --}}
            <div class="row">
                {{-- Graph --}}
                {{-- TODO: semua col-md blm dikalibrasi --}}
                <div class="col-lg-7 col-md-6">
                    <div class="card" style="height: 100%">
                        <div class="card-body">

                            <div class="text-center">
                                <p class="h2 counter"><strong>GRAPH</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END Graph --}}
                {{-- Articles --}}
                <div class="col-lg-5 col-md-6">
                    <div class="card" style="height: 100%">
                        <div class="card-body" style="padding-bottom:.1rem">
                            {{-- Header Articles --}}
                            <div class="row" style="margin-bottom:1rem">
                                <div class="col-lg-6 col-md-6">
                                    <p class="h5"><strong>Artikel</strong></p>
                                </div>
                                <div class="col-lg-6 col-md-6 text-end">
                                    <a href="/artikel" class="col-lg-8">
                                        <span class="item-name">Artikel Lainnya</span>
                                        <i class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="#3a57e8" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12l14 0" />
                                                <path d="M13 18l6 -6" />
                                                <path d="M13 6l6 6" />
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            </div>
                            {{-- END Header Articles --}}
                            {{-- Hot Articles --}}
                            @foreach ($artikels as $artikel)
                                <x-card.image-card :img="$artikel['img']" :link="$artikel['link']" :title="$artikel['title']"
                                    :tanggal="$artikel['tanggal']" />
                                {{-- FIXME: dimatikan dulu karena bukan collection DB --}}
                                {{-- <x-card.image-card :img="$artikel->img" :link="$artikel->link" :title="$artikel->title"
                                :tanggal="$artikel->tanggal" /> --}}
                            @endforeach
                            {{-- END Hot Articles --}}
                        </div>
                    </div>
                </div>
                {{-- END Articles --}}
            </div>
            {{-- END SECTION Graph & Articles --}}
            <div style="margin: 2rem"></div>
            {{-- SECTION More Data Visualizations --}}
            <div class="row">
                {{-- Bar Chart --}}
                <div class="col-lg-7 col-md-6">
                    <div class="card" style="height: 100%">
                        <div class="card-body">

                            <div class="text-center">
                                <p class="h2 counter"><strong>BAR</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END Bar Chart --}}
                {{-- Pie Chart --}}
                <div class="col-lg-5 col-md-6">
                    <div class="card" style="height: 100%">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="h2 counter"><strong>PIE</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END Pie Chart --}}
            </div>
            {{-- END SECTION More Data Visualizations --}}
            <div style="margin: 2rem"></div>
        </div>
    </div>
@endsection
