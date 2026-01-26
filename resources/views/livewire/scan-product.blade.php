<div>
    @if ($pick)
        @foreach ($products as $product)
            <button wire:click="addProduct({{ $product->id }})">
                <x-pos-card />
            </button>
        @endforeach
    @endif
</div>
