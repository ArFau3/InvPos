<div class="flex flex-col mt-7">
    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8 ">
        <div class="inline-block min-w-full max-w-full rounded-xl align-middle shadow-sm ">
            <table class="min-w-full max-w-full ">
                {{-- SECTION Header Tabel --}}
                <thead class="bg-zinc-200">
                    <tr>
                        <x-tabel.head :value="__('No')" class="rounded-tl-xl" />
                        <x-tabel.head :value="__('Dokumen Referensi')" />
                        <x-tabel.head :value="__('File')" />
                        <x-tabel.head :value="__('Aksi')" class="rounded-tr-xl" />
                    </tr>
                </thead>
                {{-- END SECTION Header Tabel --}}
                {{-- SECTION Body Tabel --}}
                <tbody class="bg-white">
                    @for ($i = 0; $i < $products->count(); $i++)
                        <?php $u = $i + 1; ?>
                        <tr class="group">
                            <x-tabel.td :value="$u" :route="'rincian-transaksi'" :id="'1'" :rincian="true"
                                class="rounded-bl-xl" />
                            <x-tabel.td :value="$products[$i]->nama" :route="'rincian-dokumen'" :id="'2'" :rincian="true" />
                            <x-tabel.td :value="'file'" :route="'rincian-dokumen'" :id="'3'" :rincian="true" />
                            {{-- TODO:perbaiki ke collection,bukan lagi array --}}
                            {{-- <x-tabel.td :value="$dokumen[$i]["name"]" :route="'rincian-dokumen'" :id="$dokumen[$i]["id"]"
                                    :rincian="true" /> --}}
                            <td {{-- HACK: coba cek apakah  bisa dijadikan component daripada diluar sendiri --}}
                                class="text-left font-medium py-2 px-4 sm:px-6 text-sm leading-tight text-gray-900 whitespace-no-wrap border-b border-gray-200 group-hover:bg-gray-300 group-hover:bg-opacity-75 rounded-br-xl">
                                <div class="flex">
                                    <a href="dokumen/{{ $products[$i]['id'] }}"
                                        class="text-indigo-600 hover:text-indigo-900 sm:border-black sm:border-r tooltip">
                                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M8 7V2.221a2 2 0 0 0-.5.365L3.586 6.5a2 2 0 0 0-.365.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.126a5.087 5.087 0 0 0-4.74 1.368v.001l-6.642 6.642a3 3 0 0 0-.82 1.532l-.74 3.692a3 3 0 0 0 3.53 3.53l3.694-.738a3 3 0 0 0 1.532-.82L19 15.149V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M17.447 8.08a1.087 1.087 0 0 1 1.187.238l.002.001a1.088 1.088 0 0 1 0 1.539l-.377.377-1.54-1.542.373-.374.002-.001c.1-.102.22-.182.353-.237Zm-2.143 2.027-4.644 4.644-.385 1.924 1.925-.385 4.644-4.642-1.54-1.54Zm2.56-4.11a3.087 3.087 0 0 0-2.187.909l-6.645 6.645a1 1 0 0 0-.274.51l-.739 3.693a1 1 0 0 0 1.177 1.176l3.693-.738a1 1 0 0 0 .51-.274l6.65-6.646a3.088 3.088 0 0 0-2.185-5.275Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="tooltiptext">Edit</span>
                                    </a>
                                    <form action="/dokumen/hapus/{{ $products[$i]['id'] }}" method="POST"
                                        class="inline item">
                                        <div class="hidden tipe">dokumen</div>
                                        @method('DELETE')
                                        @csrf
                                        <div class="delete">
                                            <div
                                                class="hover:cursor-pointer text-indigo-600 hover:text-indigo-900 tooltip">
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
                {{-- SECTION Body Tabel --}}
            </table>
        </div>
    </div>
</div>
