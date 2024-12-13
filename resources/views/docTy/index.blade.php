<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg md:mx-4 overflow-hidden lg:mx-8">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full md:w-1/2">
                <form class="" method="GET">
                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                        <div class="relative w-full">
                            <label for="search"
                                class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input
                                class="block p-3 pl-10 w-full text-sm text-gray-900 
                                 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none 
                                 sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 
                                 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search Contract Data" type="search" id="search" name="search">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border 
                                 cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg 
                                 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 
                                 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <a href={{ route('documentType.create') }} type="button" id="createProductModalButton"
                    data-modal-target="createProductModal" data-modal-toggle="createProductModal"
                    class="flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="mr-2 w-6 h-6 text-white " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5v14m8-7h-2m0 0h-2m2 0v2m0-2v-2M3 11h6m-6 4h6m11 4H4c-.55228 0-1-.4477-1-1V6c0-.55228.44772-1 1-1h16c.5523 0 1 .44772 1 1v12c0 .5523-.4477 1-1 1Z" />
                    </svg>
                    Add Contract
                </a>
                <div class="flex items-center space-x-3 w-full md:w-auto">
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="row" class="px-4 py-4">Code Document Type</th>
                        <th scope="row" class="px-4 py-4">Document Type Name</th>
                        <th scope="col" class="px-4 py-3">Document Type Ord</th>
                        <th scope="col" class="px-4 py-3">Description Document Type</th>
                        <th scope="col" class="px-4 py-3">Create By</th>
                        <th scope="col" class="px-4 py-3">Create Time</th>
                        <th scope="col" class="px-4 py-3">Update By</th>
                        <th scope="col" class="px-4 py-3">Update Time</th>
                        <th scope="col" class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docTy as $docty)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $docty->doc_ty_cd }}</td>
                            <td class="px-4 py-3">{{ $docty->doc_ty_nm }}</td>
                            <td class="px-4 py-3 ">{{ $docty->doc_ty_ord }}</td>
                            <td class="px-4 py-3 ">{{ $docty->doc_ty_desc }}</td>
                            <td class="px-4 py-3 ">{{ $docty->cre_by }}</td>
                            <td class="px-4 py-3 ">{{ $docty->cre_tm }}</td>
                            <td class="px-4 py-3 ">{{ $docty->upd_by }}</td>
                            <td class="px-4 py-3 ">{{ $docty->upd_tm }}</td>
                            <td class="px-4 py-3 ">
                                <form onsubmit="return confirm('Apakah Anda Yakin?');"
                                    action="{{ route('documentType.destroy', $docty->doc_ty_cd) }}" method="POST">
                                    <a type="button" id=""
                                        href="{{ route('documentType.edit', $docty->doc_ty_cd) }}"
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
                            {{-- <td class="px-4 py-3 flex w-full">
                                <form onsubmit="return confirm('Apakah Anda Yakin?');"
                                    action="{{ route('contract.destroy', $con->contr_id) }}" method="POST">
                                    <a href="{{ route('contract.edit', $con->contr_id) }}"
                                        class="g-yellow-flex items-center text-white justify-center bg-yellow-400 hover:b500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
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

                            </td> --}}
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>

    </div>
    </div>
</x-layout>
