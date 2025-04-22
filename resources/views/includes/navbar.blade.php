<header class="sticky top-0 bg-white h-16 flex items-center px-5 gap-4 z-50">
    <!-- Topbar Brand Logo -->
    <a class='md:hidden flex' href=''>
        <img src="{{ asset('assets/images/logo-sm.png') }}" class="h-6" alt="Small logo">
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-toggle-menu" class="text-gray-500 hover:text-gray-600 p-2 rounded-full block lg:hidden cursor-pointer"
        data-hs-overlay="#app-menu" aria-label="Toggle navigation">
        {{-- <i class="ti ti-menu-2 text-2xl"></i> --}}
        <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">Menu</i>
    </button>

    <!-- Language Dropdown Button -->
    <div class="ms-auto hs-dropdown relative inline-flex [--placement:bottom-right]">
        <button type="button" class="hs-dropdown-toggle inline-flex items-center">
            <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="user-image" class="h-4 w-6">
        </button>

        <div
            class="hs-dropdown-menu duration mt-2 min-w-[12rem] rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
            <a href="javascript:void(0);"
                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                <img src="{{ asset('assets/images/flags/germany.jpg') }}" alt="user-image" class="h-4">
                <span class="align-middle">German</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);"
                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                <img src="{{ asset('assets/images/flags/italy.jpg') }}" alt="user-image" class="h-4">
                <span class="align-middle">Italian</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);"
                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                <img src="{{ asset('assets/images/flags/spain.jpg') }}" alt="user-image" class="h-4">
                <span class="align-middle">Spanish</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);"
                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                <img src="{{ asset('assets/images/flags/russia.jpg') }}" alt="user-image" class="h-4">
                <span class="align-middle">Russian</span>
            </a>
        </div>
    </div>

    <!-- Fullscreen Toggle Button -->
    <div class="md:flex hidden">
        <button data-toggle="fullscreen" type="button" class="nav-link p-2">
            <span class="sr-only">Fullscreen Mode</span>
            <span class="flex items-center justify-center size-6">
                <i class="ti ti-maximize text-2xl"></i>
            </span>
        </button>
    </div>

    <!-- Profile Dropdown Button -->
    <div class="relative">
        <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
            <button type="button" class="hs-dropdown-toggle nav-link flex items-center gap-2">
                <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" alt="user-image" class="rounded-full h-10">
                <span class="md:flex items-center hidden">
                    <span class="font-semibold text-base">Jamie D.</span>
                    <i class="ti ti-chevron-down text-sm ms-2"></i>
                </span>
            </button>
            <div
                class="hs-dropdown-menu duration mt-2 min-w-[12rem] rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="#">
                    Profile
                </a>
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="#">
                    Feed
                </a>
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="#">
                    Analytics
                </a>
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="#">
                    Settings
                </a>
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="#">
                    Support
                </a>
                <hr class="my-2">
                <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="#">
                    Log Out
                </a>
            </div>
        </div>
    </div>
</header>
