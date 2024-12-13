<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="row md:container md:mx-auto md:px-4" x-data="{ showPassword: false }">
        <div class="col-md-1"></div>
        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="sm:col-span-2 mb-5">
                <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <select name="type"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="1" {{ old('type', $user->type) == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ old('type', $user->type) == 2 ? 'selected' : '' }}>Unit Head</option>
                    <option value="3" {{ old('type', $user->type) == 3 ? 'selected' : '' }}>Cae</option>
                </select>
                @error('type')
                    <div class="text-red-600 text-sm mt-3 inline-block">
                        {{ $message }}
                    </div>
                @enderror ()
            </div>

            <div class="sm:col-span-2 mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama</label>
                <input type="text" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    value="{{ $errors->has('name') ? '' : $user->name }}" autocomplete="off">
                @error('name')
                    <div class="text-red-600 text-sm mt-3 inline-block">
                        {{ $message }}
                    </div>
                @enderror ()
            </div>

            <div class="sm:col-span-2 mb-5">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Username</label>
                <input type="text" name="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    value="{{ $errors->has('username') ? '' : $user->username }}" autocomplete="off">
                @error('username')
                    <div class="text-red-600 text-sm mt-3 inline-block">
                        {{ $message }}
                    </div>
                @enderror ()
            </div>

            <div class="sm:col-span-2 mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Email</label>
                <input type="text" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    value="{{ $errors->has('email') ? '' : $user->email }}" autocomplete="off">
                @error('email')
                    <div class="text-red-600 text-sm mt-3 inline-block">
                        {{ $message }}
                    </div>
                @enderror ()
            </div>

            <div class="sm:col-span-2 mb-5">
                <label for="passowrd"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passowrd</label>
                <input type="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    x-bind:type="showPassword ? 'text' : 'password'" placeholder="Leave blank to keep current password">
                @error('password')
                    <div class="text-red-500 text-sm mt-2" id="usernamePassword">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('users.index') }}" type="button"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>


</x-layout>
