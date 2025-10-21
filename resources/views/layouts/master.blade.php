@include('layouts.header')

<body>
    {{-- SECTION Sidebar --}}
    {{-- FIXME: nanti pakai role --}}
    {{-- FIXME: main nimpa sidebar di mobile, jadi nda nampak sidebarnya --}}
    @isset($role_user)
        @if ($role_user == 1)
            {{-- IF: Role 1 (Pengepul) --}}
            @include('layouts.sidebars.pengepul')
        @elseif ($role_user == 2)
            {{-- IF: Role 2 (Pabrik) --}}
            @include('layouts.sidebars.pabrik')
        @else
            {{-- IF: Failsafe, back to template --}}
            @include('layouts.sidebar')
        @endif
    @endisset
    @empty($role_user)
        {{-- IF: Empty --}}
        @include('layouts.sidebar')
    @endempty
    {{-- END SECTION Sidebar --}}

    <main class="main-content">
        @include('layouts.navbar')

        @yield('container')

    </main>
    @include('layouts.script')
</body>

</html>
