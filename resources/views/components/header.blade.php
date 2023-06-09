<nav x-data="{ isOpen: false }" class="relative bg-gray-100 shadow dark:bg-gray-800">
    <div class="container px-6 py-3 mx-auto md:flex">
        <div class="flex items-center justify-between">
            <a href="#">
                <img class="w-auto h-10 sm:h-12" src="https://bijit.xyz/cockpit-master/storage/uploads/2023/06/08/paisalogo_uid_64817c4bc0520.svg" alt="">
            </a>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>

                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-gray-100 dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between">
            <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10 md:py-0">
                <a href="#" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700 md:mx-2">Home</a>
                <a href="#" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700 md:mx-2">About</a>
                <a href="#" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700 md:mx-2">Contact</a>
            </div>

            <div class="relative mt-4 md:mt-0 items-center gap-4 lg:flex">
                <a
                    href="{{ route('login') }}"
                    class="rounded-lg bg-gray-200 px-5 py-2 text-sm font-medium text-gray-600"
                >
                    Log in
                </a>
            </div>
        </div>
    </div>
</nav>
