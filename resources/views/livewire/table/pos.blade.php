<table class="min-w-full max-w-full ">
    {{-- SECTION Header Tabel --}}
    <thead class="bg-zinc-200">
        <tr>
            <x-tabel.head :value="__('Foto')" class="rounded-tl-xl" />
            <x-tabel.head :value="__('Nama')" />
            <x-tabel.head :value="__('Jumlah')" />
            <x-tabel.head :value="__('Harga')" />
            <x-tabel.head :value="__('Aksi')" class="rounded-tr-xl" />
        </tr>
    </thead>
    {{-- END SECTION Header Tabel --}}
    {{-- SECTION Body Tabel --}}
    <tbody class="bg-white">
        @for ($i = 0; $i < $pos->count(); $i++)
            <?php $u = $i + 1;
            // $total = $stocks->where('products_id', $products[$i]->id)->first();
            ?>
            <tr class="group">
                <x-tabel.td :value="$u" :route="'rincian-transaksi'" :id="'1'" class="rounded-bl-xl" />
                <x-tabel.td value="{{ $pos[$i]['nama'] }}" :route="'rincian-dokumen'" :id="'2'" />
                {{-- <x-tabel.td :value="$total->amount ?? 0" :route="'rincian-dokumen'" :id="'2'" /> --}}
                <x-tabel.td value="{{ $pos[$i]['amount'] }}" :route="'rincian-dokumen'" :id="'2'" />
                <x-tabel.td value="{{ $pos[$i]['price'] }}" :route="'rincian-dokumen'" :id="'2'" :money="true" />
                <td {{-- HACK: coba cek apakah  bisa dijadikan component daripada diluar sendiri --}}
                    class=" font-medium py-2 px-4 sm:px-6 text-sm leading-tight text-gray-900 whitespace-no-wrap border-b border-gray-200 group-hover:bg-gray-300 group-hover:bg-opacity-75 rounded-br-xl">
                    <div class="flex">
                        <form action="/dokumen/hapus/{{ $i }}" method="POST" class="inline item">
                            <div class="hidden tipe">dokumen</div>
                            @method('DELETE')
                            @csrf
                            <div class="delete">
                                <div class="hover:cursor-pointer text-indigo-600 hover:text-indigo-900 tooltip">
                                    <svg class="w-6 h-6 text-gray-800 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="tooltiptext">Hapus</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
        @endfor
    </tbody>
    {{-- END SECTION Body Tabel --}}

</table>
