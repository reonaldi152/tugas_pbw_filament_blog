<nav class="max-w-screen-2xl mx-auto px-4 lg:px-24">
    <div class="flex flex-col items-stretch lg:flex-row lg:items-center">
        <div class="flex items-center justify-between">
            <!-- LOGO -->
            <div class="logo text-3xl font-bold text-black-2 font-sans-serif">
                Blog
            </div>
            <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
            <div>
                <button class="block p-1 focus:outline-none lg:hidden mobile-menu-button" data-target="#navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" x-show="!showMenu" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                        <path stroke-linecap="round" class="hidden" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- NAV ITEM -->
        <div class="hidden w-full mobile-menu lg:block" id="navigation">
            <div class="flex flex-col items-baseline justify-between mt-6 lg:flex-row lg:items-center lg:mt-0">
                <div class="flex flex-col w-full mx-0 font-semibold lg:flex-row text-blue-tertiary lg:mx-auto lg:w-max">
                    <a href="/"
                        class="py-3 pl-3 mx-2 border-l-4 cursor-pointer lg:mx-9 lg:border-l-0 lg:border-b-4 lg:pl-0 active:border-blue-primary text-black-2 border-blue-primary">Home</a>
                    {{-- <a href="#"
                        class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9 lg:border-l-0 lg:border-b-4 lg:pl-0">Partners</a>
                    <a href="#"
                        class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9 lg:border-l-0 lg:border-b-4 lg:pl-0">Recomendation</a> --}}
                </div>
                @guest
                    <div class="mt-auto">
                        <div class="pt-6">
                            <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-bold bg-green-600 hover:bg-green-700  rounded-xl"
                                href="/admin/login">Sign In</a>
                        </div>
                    </div>
                @endguest

            </div>

        </div>
    </div>
</nav>
