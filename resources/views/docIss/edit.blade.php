<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="row lg:container lg:mx-auto lg:px-4">
        <div class="col-md-1"></div>
        <form action="{{ route('document.update', $docIsu) }}" method="POST" class="">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                @csrf
                @method('PUT')
                <div class="relative z-0 w-full mb-5 group">
                    <label for="doc_isu_cd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Document Issue Code
                    </label>
                    <input type="text" name="doc_isu_cd"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off" value="{{ old('doc_isu_cd', $docIsu->doc_isu_cd) }}">
                    </input>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Document Issue Name</label>
                    <input type="text" name="doc_isu_nm"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off" value="{{ old('doc_isu_nm', $docIsu->doc_isu_nm) }}">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Document Issue Ord</label>
                    <input type="text" name="doc_isu_ord"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off" value="{{ old('doc_isu_ord', $docIsu->doc_isu_ord) }}">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Document Issue Val</label>
                    <input type="text" name="doc_isu_val"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off" value="{{ old('doc_isu_val', $docIsu->doc_isu_val) }}">
                </div>



                <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Create By</label>
                    <input type="text" name="cre_by"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off" value="{{ old('cre_by', $docIsu->cre_by) }}">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Create Time</label>
                    <input type="date" name="cre_tm"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off" value="{{ old('cre_tm', $docIsu->cre_tm) }}">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Update By</label>
                    <input type="text" name="upd_by"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off" value="{{ old('upd_by', $docIsu->upd_by) }}">
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Update Time</label>
                    <input type="date" name="upd_tm"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off" value="{{ old('upd_tm', $docIsu->upd_tm) }}">
                </div>
            </div>

            <div class="relative z-0 w-full mb-5 group col-span-full">
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document
                    Issue Description</label>
                <textarea id="" name="doc_isu_desc" rows="5"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ old('doc_isu_desc', $docIsu->doc_isu_desc) }}</textarea>
            </div>

            {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Document Issue Description</label>
                    <input type="text" name="doc_isu_desc"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off" value="{{ old('doc_isu_desc', $docIsu->doc_isu_desc) }}">
                </div> --}}

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('document.index') }}" type="button"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
    </div>

</x-layout>
