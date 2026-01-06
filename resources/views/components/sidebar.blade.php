@props(['link', 'name', 'isActive' => false])

<a class="{{ $isActive ? ' bg-white ' : '' }} border-b-1 flex items-center px-4 py-2 text-zinc-800 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100"
    href="{{ $link }}">
    {{ $slot }}
    <span class="mx-3 font-bold">{{ $name }}</span>
</a>
