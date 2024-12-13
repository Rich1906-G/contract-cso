<x-layout_user>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
            class="fixed top-4 right-4 bg-green-500 text-white px-4 py-3 rounded-lg shadow-lg flex items-center p-4 mb-4 text-sm border border-green-300 dark:bg-gray-800 dark:text-green-400 dark:border-green-800">
            <div class="flex items-center justify-between">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <div class="font-medium">
                        <span>Welcome {{ Auth::user()->name }} {{ session('success') }}</span>
                    </div>
                </div>
                <button @click="show = false" class="ml-4 text-white">
                    &times;
                </button>
            </div>
        </div>
    @endif

    @if (session('dilarang'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
            class="fixed top-4 right-4 bg-red-500 text-white px-4 py-3 rounded-lg shadow-lg flex items-center p-4 mb-4 text-sm border border-red-300 dark:bg-red-800 dark:text-red-400 dark:border-red-800">
            <div class="flex items-center justify-between">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <div class="font-medium">
                        <span> {{ session('dilarang') }}</span>
                    </div>
                </div>
                <button @click="show = false" class="ml-4 text-white">
                    &times;
                </button>
            </div>
        </div>
    @endif

    @if (session('search'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
            class="fixed top-4 right-4 bg-red-500 text-white px-4 py-3 rounded-lg shadow-lg flex items-center p-4 mb-4 text-sm border border-red-300 dark:bg-red-800 dark:text-red-400 dark:border-red-800">
            <div class="flex items-center justify-between">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <div class="font-medium">
                        <span> {{ session('search') }}</span>
                    </div>
                </div>
                <button @click="show = false" class="ml-4 text-white">
                    &times;
                </button>
            </div>
        </div>
    @endif

    @if (session('cari'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
            class="fixed top-4 right-4 bg-red-500 text-white px-4 py-3 rounded-lg shadow-lg flex items-center p-4 mb-4 text-sm border border-red-300 dark:bg-red-800 dark:text-red-400 dark:border-red-800">
            <div class="flex items-center justify-between">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <div class="font-medium">
                        <span> {{ session('cari') }}</span>
                    </div>
                </div>
                <button @click="show = false" class="ml-4 text-white">
                    &times;
                </button>
            </div>
        </div>
    @endif

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden md:mx-4 lg:mx-8">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 ">
            <div class="w-full md:w-full lg:w-1/2 ">
                <form action="{{ route('unitHead.search') }}" method="GET">
                    <div
                        class="items-center mx-auto mb-3 lg:mb-0 space-y-4 max-w-screen-sm sm:flex sm:space-y-0 lg:mx-0 lg:max-w-screen-lg">
                        <div class="relative w-full md:w-full">
                            <label for="search"
                                class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">Search</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input autocomplete="off" type="text"
                                class="block p-3 pl-10 w-full text-sm md:block md:w-full text-gray-900 
                                          bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none 
                                          sm:rounded-l-lg  focus:ring-primary-500 focus:border-primary-500 
                                          dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                          dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search Contract Data" type="search" id="search" name="search">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="">
                        <th class="px-4 py-3 lg:py-4 ">No</th>
                        <th class="px-8 py-3 lg:py-4 ">Branch</th>
                        <th class="px-8 py-3 lg:py-4 ">Customer ID</th>
                        <th class="px-8 py-3 lg:py-4 ">Username</th>
                        <th class="px-8 py-3 lg:py-4 ">CAE</th>
                        <th class="px-8 py-3 lg:py-4 ">Unit Head</th>
                        <th class="px-8 py-3 lg:py-4 ">Company</th>
                        <th class="px-8 py-3 lg:py-4 ">Service Type</th>
                        <th class="px-8 py-3 lg:py-4 ">Effective Date</th>
                        <th class="px-8 py-3 lg:py-4 ">Expired Date Contract</th>
                        <th class="px-8 py-3 lg:py-4 ">Contract Period (Month)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contractUser as $con)
                        <tr class="">
                            <td class="px-4 py-3 lg:py-8 lg:px-4 ">{{ $contractUser->firstItem() + $loop->index }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4 ">{{ $con->branch }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4  ">{{ $con->cust_id }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4  ">{{ $con->nameuser }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4  ">{{ $con->cae }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4  ">{{ $con->unit_head }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4  ">{{ $con->cpart_pic_lst }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4  ">{{ $con->serv_ty }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4  ">{{ $con->eff_dt }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4  ">{{ $con->exp_dt }}</td>
                            <td class="px-4 py-3 lg:py-8 lg:px-4  ">{{ $con->contr_period }}</td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $contractUser->links() }}
        </div>
    </div>
</x-layout_user>
