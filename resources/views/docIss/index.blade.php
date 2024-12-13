<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden md:mx-4 lg:mx-8 xl:m-4">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 ">
            <div class="w-full md:w-1/2">
                <form action="{{ route('contract.search') }}" method="GET">
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
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-full border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0 ">
                {{-- <form action="{{ route('contract.export') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button type="submit"
                        class="w-full lg:w-auto flex items-center justify-center text-white me-2 mb-2 md:mb-0 lg:mb-0 lg:me-0 bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full lg:rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="mr-2 w-6 h-6 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.293l-2-2a1 1 0 0 0-1.414 1.414l.293.293h-6.586a1 1 0 1 0 0 2h6.586l-.293.293A1 1 0 0 0 18 16.707l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        Export Data
                    </button>
                </form> --}}
                <div
                    class="w-1/2 items-stretch md:w-1/2 md:flex-row md:space-y-0 md:items-center md:space-x-3 shrink-0 lg:w-auto  ">
                    {{-- <a href={{ route('contract.import') }} type="button"
                        class="flex items-center justify-center text-white ml-2 md:m-0 lg:ml-0 lg:my-0 bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full lg:rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-5h7.586l-.293.293a1 1 0 0 0 1.414 1.414l2-2a1 1 0 0 0 0-1.414l-2-2a1 1 0 0 0-1.414 1.414l.293.293H4V9h5a2 2 0 0 0 2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        Import Data
                    </a> --}}
                </div>
                <div class="w-full lg:w-auto">
                    <a href={{ route('contract.create') }} type="button"
                        class="w-full flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full lg:rounded-lg text-sm px-5 py-2.5 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg class="mr-2 w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5v14m8-7h-2m0 0h-2m2 0v2m0-2v-2M3 11h6m-6 4h6m11 4H4c-.55228 0-1-.4477-1-1V6c0-.55228.44772-1 1-1h16c.5523 0 1 .44772 1 1v12c0 .5523-.4477 1-1 1Z" />
                        </svg>
                        Add Data
                    </a>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="row" class="px-4 py-4">Document Issue Code</th>
                        <th scope="row" class="px-4 py-4">Document Issue Name</th>
                        <th scope="col" class="px-4 py-3">Document Issue Ord</th>
                        <th scope="col" class="px-4 py-3">Document Issue Val</th>
                        <th scope="col" class="px-4 py-3">Document Issue Description</th>
                        <th scope="col" class="px-4 py-3">Create By</th>
                        <th scope="col" class="px-4 py-3">Create Time</th>
                        <th scope="col" class="px-4 py-3">Update By</th>
                        <th scope="col" class="px-4 py-3">Update Time</th>
                        <th scope="col" class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docIsu as $docis)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $docis->doc_isu_cd }}</td>
                            <td class="px-4 py-3">{{ $docis->doc_isu_nm }}</td>
                            <td class="px-4 py-3 ">{{ $docis->doc_isu_ord }}</td>
                            <td class="px-4 py-3 ">{{ $docis->doc_isu_val }}</td>
                            <td class="px-4 py-3 ">{{ $docis->doc_isu_desc }}</td>
                            <td class="px-4 py-3 ">{{ $docis->cre_by }}</td>
                            <td class="px-4 py-3 ">{{ $docis->cre_tm }}</td>
                            <td class="px-4 py-3 ">{{ $docis->upd_by }}</td>
                            <td class="px-4 py-3 ">{{ $docis->upd_tm }}</td>
                            <td class="px-4 py-3 flex w-full">
                                <form onsubmit="return confirm('Apakah Anda Yakin?');"
                                    action="{{ route('document.destroy', $docis->doc_isu_cd) }}" method="POST">
                                    <a type="button" href="{{ route('document.edit', $docis->doc_isu_cd) }}"
                                        class="flex items-center text-white justify-center bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg> Edit
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="flex items-center text-white justify-center bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>

    </div>
    </div>
</x-layout>
