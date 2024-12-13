<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="row lg:container lg:mx-auto lg:px-4">
        <form action="{{ route('documentType.store') }}" method="POST" class="">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <label for="doc_ty_cd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Code Document Type
                    </label>
                    <input type="text" name="doc_ty_cd"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">
                    </input>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="doc_ty_nm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Document Type Name</label>
                    <input type="text" name="doc_ty_nm"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="doc_ty_ord" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Document Type Ord</label>
                    <input type="text" name="doc_ty_ord"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="doc_ty_desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Description Document Type</label>
                    <input type="text" name="doc_ty_desc"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">
                </div>


                <div class="relative z-0 w-full mb-5 group">
                    <label for="cre_by" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Create By</label>
                    <input type="text" name="cre_by"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="cre_tm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Create Time</label>
                    <input type="date" name="cre_tm"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="upd_by" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Update By</label>
                    <input type="text" name="upd_by"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="upd_tm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Update Time</label>
                    <input type="date" name="upd_tm"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('documentType.index') }}" type="button"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
    </div>

</x-layout>
