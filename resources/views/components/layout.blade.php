<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contract CSO</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" href="{{ asset('/storage/Logo_CBN_White.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none
        }
    </style>

</head>

<body class="h-full" x-data="{ logout: false }">
    <div class="min-h-full">

        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>

        {{-- <x-sidebar></x-sidebar> --}}


        <main>
            <div class="px-4 py-6 sm:px-6 mx-auto max-w-8xl md:max-w-8xl lg:px-0 xl:max-w-full xl:p-4">
                {{-- flex md:mx-auto md:max-w-8xl xl:max-w-9xl 2xl:justify-center 2xl:items-center px-4 py-6 sm:px-6 lg:mx-2 lg:px-0 --}}
                <!-- Your content -->
                {{ $slot }}
            </div>
            <div x-cloak x-show="logout" x-transition
                class="bg-black/50 fixed top-0 left-0 h-screen w-full flex justify-center items-center">
                <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5 ">
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button @click="logout = false" type="button"
                            class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="deleteModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close</span>
                        </button>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            class="w-11 h-11 mb-3.5 mx-auto" fill="#999999">
                            <path
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
                        </svg>
                        <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want logout?</p>
                        <div class="flex justify-center items-center space-x-4">
                            <button @click="logout = false" type="button"
                                class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                No, cancel
                            </button>
                            <button type="submit" @click="logout = false"
                                class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                Yes, I'm sure
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <x-footer></x-footer>

</body>

</html>
