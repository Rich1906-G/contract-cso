<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="w-full container mx-auto px-4 pt-2 pb-4 lg:px-4">
        <form action={{ route('contract.importProses') }} method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file">Import file</label>
            <input 
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file" id="file" type="file" name="excel_file">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file">The data must be an excel file
            </div>
            @if (session('error'))
                <div class="lg:w-full">
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-4 lg:flex lg:justify-center lg:items-center"
                        role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline "> {{ session('error') }} </span>
                    </div>
                </div>
            @endif
            <div class="my-3 flex items-center justify-end">
                <button type="submit"
                    class= "text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Import</button>
                <a href="{{ route('contract.index') }}" type="button"
                    class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
