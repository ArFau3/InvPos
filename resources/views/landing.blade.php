@extends('layouts.master')
@section('container')
    <div class="conatiner-fluid content-inner py-3">
        <div>
            <div class="mb-3">
                <input class="form-control form-control-sm" type="text" placeholder="Cari produk"
                    aria-label=".form-control-sm example">
            </div>
            <div class="row">
                {{-- SECTION Table All Data --}}
                <div class="">
                    <div class="card">
                        @foreach ($truks as $truk)
                            {{-- FIXME: blm di scrollable, jadi kepanjangan nanti kalau banyak --}}
                            <x-card.icon-card :link="'/logistik/' . $truk['id']" :title="$truk['nama']" :tanggal="$truk['tanggal']">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6rem" height="6rem" viewBox="0 0 24 24"
                                    fill="#292929" class="icon icon-tabler icons-tabler-filled icon-tabler-car-crane">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3.06 5.66l.035 -.085l.07 -.125l.033 -.048l.063 -.075l.064 -.065l.098 -.079l.106 -.065l.067 -.033l.048 -.02l.139 -.041l18.053 -3.01a1 1 0 0 1 1.164 .986v2a1 1 0 0 1 -2 0v-.82l-13.802 2.3l1.25 .626a1 1 0 0 1 .552 .894l-.001 3h2.001v-4a1 1 0 0 1 1 -1h4a6 6 0 0 1 6 6v5a1 1 0 0 1 -1 1h-1.17a3.001 3.001 0 0 1 -5.66 0h-6.34a3.001 3.001 0 0 1 -5.83 -1v-5a1 1 0 0 1 1 -1v-4.99a1 1 0 0 1 .06 -.35m1.94 10.34a1 1 0 1 0 0 2a1 1 0 0 0 0 -2m12 0a1 1 0 1 0 .992 1.124l.008 -.132l-.007 -.109a1 1 0 0 0 -.993 -.883m-.652 -7.985l.895 2.985h2.63l-.042 -.155a4 4 0 0 0 -3.223 -2.8z" />
                                </svg>
                            </x-card.icon-card>
                            {{-- FIXME: dimatikan dulu karena bukan collection DB --}}
                            {{-- <x-card.icon-card :link="'/logistik/' . $truk->id" :title="$truk->nama" :tanggal="$truk->tanggal" /> --}}
                        @endforeach
                    </div>
                    <div style="justify-items: center;"><x-button.tambah :text="__('Tambah Pengiriman')" /></div>
                </div>
                {{-- END SECTION Table All Data --}}
            </div>
        </div>
    </div>
    {{-- TODO: Logicnya masih user karena blm fix fungsional --}}
    @include('logistik.modal.create')
    @include('logistik.modal.edit')
    @include('logistik.modal.delete')
@endsection
