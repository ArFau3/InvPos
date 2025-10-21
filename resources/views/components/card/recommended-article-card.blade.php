@props(['link', 'img', 'title', 'tanggal'])
{{-- TODO: KOMPONEN LAMA, AGAR REUSE DIGANTI KE IMAGE-CARD --}}
<a href="{{ $link }}">
    <div style="margin-bottom: .5rem">
        {{-- <div class="card-body"> --}}
        <div class="d-flex ">
            <div class="text-white rounded" style="margin:.3rem; width:7rem; height:auto">
                <img class="rounded" src="{{ $img }}" alt="" style="max-width:100%; height:auto">
            </div>
            <div class="p-1">
                {{-- FIXME: tanggal dan title tidak saling menolak, sehingga jika title pendek tanggal geser ke atas --}}
                <p class="h6 overflow-hidden text-wrap truncate" style="margin:.3rem; width:15rem; max-height:4rem">
                    <strong>{{ $title }}</strong>
                </p>
                {{-- TODO: aktifkan intl id php.ini untuk pakai Carbon --}}
                <p class="h6" style="visibility: visible; scale:90%"><small><em>{{ $tanggal }}</em></small></p>
            </div>
        </div>
    </div>
    {{-- </div> --}}
</a>
