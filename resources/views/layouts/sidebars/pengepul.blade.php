<aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all"style="background-color: #2F4924;">
    {{-- SECTION Header Sidebar --}}
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        {{-- Header Sidebar --}}
        <a href="/" class="navbar-brand">
            <!--Logo start-->
            <!--logo End-->

            <!--Logo start-->
            <div class="logo-main">
                <div class="logo-normal">
                    <svg class="icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                            transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                            transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                            transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                            transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                    </svg>
                </div>
                <div class="logo-mini">
                    <svg class="icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                            transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                            transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                            transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                            transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                    </svg>
                </div>
            </div>
            <!--logo End-->
            <h4 class="logo-active text-white">Palm Trace</h4>
        </a>
        {{-- END Header Sidebar --}}
        {{-- Menu Toggle Sidebar --}}
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
        {{-- END Menu Toggle Sidebar --}}

    </div>
    {{-- END SECTION Header Sidebar --}}
    {{-- SECTION Sidebar --}}
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu mt-5" id="sidebar-menu">
                {{-- Dashboard --}}
                <x-sidebar.nav-item :active="$active == 'dashboard' ? true : false" :nama="__('Dashboard')" :link="__('/pengepul')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="#f0f0f0" class="icon icon-tabler icons-tabler-filled icon-tabler-home">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-1v-7a3 3 0 0 0 -2.824 -2.995l-.176 -.005h-2a3 3 0 0 0 -3 3v7h-1a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.293 11.707a1 1 0 0 1 1 1v7h-4v-7a1 1 0 0 1 .883 -.993l.117 -.007z" />
                    </svg>
                </x-sidebar.nav-item>
                {{-- END Dashboard --}}
                {{-- FIXME: perbaiki icon terutama selain dashboard karena masih random --}}
                {{-- HACK: warna icon di tabler.io => #f0f0f0 --}}
                {{-- Pemasok --}}
                <x-sidebar.nav-item :active="$active == 'pemasok' ? true : false" :nama="__('Pemasok')" :link="__('/pemasok')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#f0f0f0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-a-b-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M16 21h3c.81 0 1.48 -.67 1.48 -1.48l.02 -.02c0 -.82 -.69 -1.5 -1.5 -1.5h-3v3z" />
                        <path d="M16 15h2.5c.84 -.01 1.5 .66 1.5 1.5s-.66 1.5 -1.5 1.5h-2.5v-3z" />
                        <path d="M4 9v-4c0 -1.036 .895 -2 2 -2s2 .964 2 2v4" />
                        <path d="M2.99 11.98a9 9 0 0 0 9 9m9 -9a9 9 0 0 0 -9 -9" />
                        <path d="M8 7h-4" />
                    </svg>
                </x-sidebar.nav-item>
                {{-- END Pemasok --}}
                {{-- Penimbangan --}}
                <x-sidebar.nav-item :active="$active == 'penimbangan' ? true : false" :nama="__('Penimbangan')" :link="__('/penimbangan')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#f0f0f0" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-scale">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 20l10 0" />
                        <path d="M6 6l6 -1l6 1" />
                        <path d="M12 3l0 17" />
                        <path d="M9 12l-3 -6l-3 6a3 3 0 0 0 6 0" />
                        <path d="M21 12l-3 -6l-3 6a3 3 0 0 0 6 0" />
                    </svg>
                </x-sidebar.nav-item>
                {{-- END Penimbangan --}}
                {{-- Logistik --}}
                <x-sidebar.nav-item :active="$active == 'logistik' ? true : false" :nama="__('Logistik')" :link="__('/logistik')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="#f0f0f0" class="icon icon-tabler icons-tabler-filled icon-tabler-truck">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M13 4a1 1 0 0 1 1 1h4a1 1 0 0 1 .783 .378l.074 .108l3 5l.055 .103l.04 .107l.029 .109l.016 .11l.003 .085v6a1 1 0 0 1 -1 1h-1.171a3.001 3.001 0 0 1 -5.658 0h-4.342a3.001 3.001 0 0 1 -5.658 0h-1.171a1 1 0 0 1 -1 -1v-11a2 2 0 0 1 2 -2zm-6 12a1 1 0 1 0 0 2a1 1 0 0 0 0 -2m10 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2m.434 -9h-3.434v3h5.234z" />
                    </svg>
                </x-sidebar.nav-item>
                {{-- END Logistik --}}
                {{-- Transaksi --}}
                <x-sidebar.nav-item :active="$active == 'transaksi' ? true : false" :nama="__('Transaksi')" :link="__('/transaksi')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#f0f0f0" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-dollar">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M6 4v4" />
                        <path d="M6 12v8" />
                        <path d="M13.366 14.54a2 2 0 1 0 -.216 3.097" />
                        <path d="M12 4v10" />
                        <path d="M12 18v2" />
                        <path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M18 4v1" />
                        <path d="M18 9v1" />
                        <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                        <path d="M19 21v1m0 -8v1" />
                    </svg>
                </x-sidebar.nav-item>
                {{-- END Transaksi --}}
            </ul>
            <!-- Sidebar Menu End -->
        </div>
    </div>
    {{-- END SECTION Sidebar --}}

    <!-- <div class="sidebar-footer"></div> -->
</aside>
