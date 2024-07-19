<nav x-data="{ open: false }" class="bg-white dark:bg-[#11151A]  border-b border-gray-100 dark:border-[#11151A] shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                {{-- <div class="shrink-0 flex items-center justify-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{asset('images/svg/lobo-g.svg')}}"  width="35" height="auto" alt="My SVG Icon">
                        {{-- <x-application-mark class="block h-9 w-auto" /> 
                    </a>
                </div> --}}
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="#home" :active="request()->routeIs('dashboard')">
                        <div class="flex justify-center items-center">
                            <i class="fa-solid fa-house"></i>
                            <span class="mx-1 hidden md:flex lg:flex xl:flex  2xl:flex ">
                                <b>{{ __('Home') }}</b>
                            </span>
                        </div>
                    </x-nav-link>
                    <x-nav-link href="#about-me" :active="request()->routeIs('dashboard')">
                        <div class="flex justify-center items-center">
                            <i class="fa-solid fa-user"></i>
                            <span class="mx-1 hidden md:flex lg:flex xl:flex  2xl:flex ">
                                <b> {{ __('About') }}</b>
                            </span>
                        </div>
                    </x-nav-link>
                    <x-nav-link href="#experience" :active="request()->routeIs('dashboard')">
                        <div class="flex justify-center items-center">
                            <i class="fa-brands fa-slack"></i>
                            <span class="mx-1  hidden md:flex lg:flex xl:flex  2xl:flex ">
                                <b>{{ __('Experience') }}</b>
                            </span>
                        </div>
                    </x-nav-link>
                    <x-nav-link href="#proyetcs" :active="request()->routeIs('dashboard')">
                        <div class="flex justify-center items-center">
                            <i class="fa-solid fa-briefcase"></i>
                            <span class="mx-1 hidden md:flex lg:flex xl:flex  2xl:flex ">
                                <b> {{ __('Proyects') }}</b>
                            </span>
                        </div>
                    </x-nav-link>
                    <x-nav-link href="#contact-me" :active="request()->routeIs('dashboard')">
                        <i class="fa-solid fa-phone"></i>
                        <span class="mx-1 hidden md:flex lg:flex xl:flex  2xl:flex ">
                            <b>{{ __('Contact') }}</b>
                        </span>
                    </x-nav-link>
                    {{-- <x-danger-button>
                    <i class="fa-solid fa-moon"></i>
                    </x-danger-button> --}}
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>


    </div>
</nav>
