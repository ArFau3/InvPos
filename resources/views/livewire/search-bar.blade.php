<div class="flex">
    {{-- Form --}}
    <div class="rounded w-full sm:w-64 border px-1 antialiased">
        <form action="" class="flex h-full justify-between">
            <input type="text" wire:model.live.debounce.10ms="search"
                class="border-0 bg-zinc-50 w-full sm:w-56 font-medium text-sm lg:text-base focus:outline-zinc-50 focus:outline-none hover:cursor-pointer"
                name="cari" id="cari" placeholder="Cari..." value="{{ request('cari') }}">
        </form>
    </div>
    {{-- END Form --}}
    {{-- Cancel Button --}}
    @if ($search)
        <a href="" wire:click.prevent='resetSearch' class="">
            <button {{-- FIXME: di profil lulusan etc jika pemetaan banyak dan height naik untk scroll, tombol x msih kecil dan nda rapi --}} wire:loading.remove
                class="tooltip hover:opacity-90 hover:cursor-pointer self-center mt-1  fa fa-times text-white bg-red-600 rounded py-1 px-3 ml-0.5 font-medium text-sm lg:text-base antialiased">
                X
                {{-- HACK: tambahkan tooltip? --}}
                <span class="tooltiptext">Cancel</span>
            </button>
        </a>
    @endif
    {{-- END Cancel button --}}
</div>
