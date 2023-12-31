<header class="w-full items-center bg-white h-16 px-6 border-b-2 flex fixed top-0 right-0 z-40">
    <div class="md:w-1/3 grow">
        <div class="flex flex-row items-center h-16 w-full px-4 md:hidden">
            <!-- mobile hamburger -->
            <div class="md:hidden flex items-center mr-4">
                <button id="hamburgerMenu" type="button" class=" primary-color hover:text-blue-500 hover:border-white focus:outline-none navbar-burger">
                    <i data-feather="menu"></i>
                </button>
            </div>
            <div class="flex ml-2 md:mr-24">
                <img src="img/logo.png" alt="stis" class="h-8 w-8 mr-3">
                <span class="self-center text-xl font-semibold sm:text-2xl primary-color whitespace-nowrap">Si-Jali</span>
            </div>
        </div>
    </div>
    <div class="relative w-1/3 flex flex-row justify-end">
            <div class="hidden sm:flex items-center mr-6">
                <p>admin1</p>
            </div>
        <div x-data="{ isOpen: false }">
            <button @click="isOpen = !isOpen" class="realtive flex items-center justify-center z-10 w-10 h-10">
                <div class="grow-0">
                    <i data-feather="user" class=""></i>
                </div>
            </button>
            <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
            <div x-show="isOpen" class="absolute w-60 flex flex-col justify-center items-center bg-white rounded-lg shadow-lg py-2 mt-8 mx-4 right-4 z-20">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user grow-0"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <p class="m-2 mb-1 text-center">admin</p>
                <p class="m-2 mt-0 text-center">admin1@gmail.com</p>
                <a href="/changePassword" class="border rounded-lg border-sky-800 text-sky-800 py-1 px-4 hover:bg-sky-800 hover:text-white mb-2">Ubah Password</a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="border rounded-lg border-red-500 text-red-500 py-1 px-4 hover:bg-red-500 hover:text-white">Logout</button>
                </form>
            </div>
        </div>
    </div>
</header>