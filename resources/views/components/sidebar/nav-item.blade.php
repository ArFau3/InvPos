@props(['link', 'nama', 'active' => false])

<li class="nav-item">
    <a class="nav-link {{ $active ? 'active' : '' }} text-white" aria-current="page" href="{{ $link }}">
        <i class="icon">
            {{ $slot }}
        </i>
        <span class="item-name">{{ $nama }}</span>
    </a>
</li>
