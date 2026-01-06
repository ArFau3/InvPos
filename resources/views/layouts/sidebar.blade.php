{{-- SECTION SIDEBAR --}}
{{-- FIXME: toggle side in hp --}}
<div class="lg:float-left lg:fixed overflow-y-auto lg:w-1/6 bg-zinc-300 text-zinc-800 lg:translate-x-0 lg:inset-0">
    {{-- SECTION card profile --}}
    <div class="items-center justify-items-center mt-8">
        <img src="{{ '/assets/blank-profile.svg' }}" class="rounded-full object-scale-down w-20 h-20 md:w-16 md:h-16"
            alt="profile picture" srcset="">
        <h3 class="text-2xl my-3 pb-0.5 lg:text-xl font-bold underline lg:no-underline">
            {{ $user['name'] }}
        </h3>

        <p class="text-xl lg:text-base font-semibold break-words overflow-hidden ">
            <a href="/profile">Info Detail</a>
        </p>
    </div>
    {{-- END SECTION card profile --}}
    <div class="border-b-1 mt-4">
    </div>
    {{-- SECTION Nav --}}
    <nav>
        {{-- LINK Dashboard --}}
        <x-sidebar :link="__('/dashboard')" :name="__('Dashboard')" :isActive=" $title === 'Dashboard' ? true : false ">
            <svg class="w-6 h-6 text-zinc-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
            </svg>
        </x-sidebar>
        {{-- END LINK Dashboard --}}
        {{-- LINK Stock --}}
        <x-sidebar :link="__('/stock')" :name="__('Stock')" :isActive=" $title === 'stock' ? true : false ">
            <svg class="w-6 h-6 text-zinc-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
            </svg>
        </x-sidebar>
        {{-- END LINK Stock --}}
        <div class="border-b-2 my-3"></div>
        {{-- LINK POS --}}
        <x-sidebar :link="__('/pos')" :name="__('POS')" :isActive=" $title === 'pos' ? true : false ">
            <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
            </svg>
        </x-sidebar>
        {{-- END LINK POS --}}
        {{-- LINK Landing Page --}}
        <x-sidebar :link="__('/landingPage')" :name="__('Landing Page')" :isActive=" $title === 'landingPage' ? true : false ">
            <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
            </svg>
        </x-sidebar>
        {{-- END LINK Landing Page --}}
        {{-- LINK Logout FIXME: perbaiki logic --}}
        <form method="POST" action="/logout">
            @csrf
            <a class="flex items-center px-4 py-2 mt-4 text-zinc-800 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100"
                href="" onclick="event.preventDefault();
                    this.closest('form').submit();">
                <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                </svg>
                <span class="mx-3">Keluar</span>
            </a>
        </form>
        {{-- END LINK Logout --}}
    </nav>
    {{-- END SECTION Nav --}}
</div>
{{-- END SECTION SIDEBAR --}}
