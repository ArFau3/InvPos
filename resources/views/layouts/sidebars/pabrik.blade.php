<aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all" style="background-color: #2F4924;">
    {{-- SECTION Header Sidebar --}}
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        {{-- Header Sidebar --}}
        <a href="/pengepul" class="navbar-brand">
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
                <x-sidebar.nav-item :active="$active == 'dashboard' ? true : false" :nama="__('Dashboard')" :link="__('/pabrik')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="#f0f0f0" class="icon icon-tabler icons-tabler-filled icon-tabler-home">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-1v-7a3 3 0 0 0 -2.824 -2.995l-.176 -.005h-2a3 3 0 0 0 -3 3v7h-1a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.293 11.707a1 1 0 0 1 1 1v7h-4v-7a1 1 0 0 1 .883 -.993l.117 -.007z" />
                    </svg>
                </x-sidebar.nav-item>
                {{-- END Dashboard --}}
                {{-- Penerimaan TBS --}}
                <x-sidebar.nav-item :active="$active == 'penerimaan-tbs' ? true : false" :nama="__('Penerimaan TBS')" :link="__('/penerimaan-tbs')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail-forward">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
                        <path d="M3 6l9 6l9 -6" />
                        <path d="M15 18h6" />
                        <path d="M18 15l3 3l-3 3" />
                    </svg>
                </x-sidebar.nav-item>
                {{-- END Penerimaan TBS --}}
                {{-- Produksi --}}
                <x-sidebar.nav-item :active="$active == 'produksi' ? true : false" :nama="__('Produksi')" :link="__('/produksi')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bulldozer">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M2 17a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M12 17a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M19 13v4a2 2 0 0 0 2 2h1" />
                        <path d="M14 19h-10" />
                        <path d="M4 15h10" />
                        <path d="M9 11v-5h2a3 3 0 0 1 3 3v6" />
                        <path d="M5 15v-3a1 1 0 0 1 1 -1h8" />
                        <path d="M19 17h-3" />
                    </svg>
                </x-sidebar.nav-item>
                {{-- END Produksi --}}
                {{-- Keuangan --}}
                <x-sidebar.nav-item :active="$active == 'keuangan' ? true : false" :nama="__('Keuangan')" :link="__('/keuangan')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-moneybag">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9.5 3h5a1.5 1.5 0 0 1 1.5 1.5a3.5 3.5 0 0 1 -3.5 3.5h-1a3.5 3.5 0 0 1 -3.5 -3.5a1.5 1.5 0 0 1 1.5 -1.5" />
                        <path d="M4 17v-1a8 8 0 1 1 16 0v1a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4" />
                    </svg>
                </x-sidebar.nav-item>
                {{-- END Keuangan --}}
            </ul>
            <!-- Sidebar Menu End -->
        </div>
    </div>
    {{-- END SECTION Sidebar --}}

    <!-- <div class="sidebar-footer"></div> -->
</aside>