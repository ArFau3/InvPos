@props(['name', 'isi'])

<div style="padding: 1rem" class="row">
    <p class="h5 col-sm-12"><strong>{{ $name }}</strong></p>
    <div class="col-sm-6"></div>
    <button disabled type="button" class="col-sm-6 btn btn-success" style="border-radius: 20%">
        <p class="h5" style="margin:0">{{ $isi }}</p>
    </button>
    {{-- </div> --}}
</div>
