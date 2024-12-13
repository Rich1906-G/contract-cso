<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="row container mx-auto p-8 md:container md:mx-auto md:p-0">
        <form action="{{ route('contract.store') }}" method="POST" class="">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                @csrf
                <div class="sm:col-span-2 mb-5">
                    <label for="cpart_pic_lst"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                    <input type="text" name="cpart_pic_lst"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('cpart_pic_lst') ? '' : old('cpart_pic_lst') }}" autocomplete="off">
                    @error('cpart_pic_lst')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror ()

                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="branch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Branch</label>
                    <input type="text" name="branch"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('branch') ? '' : old('branch') }}" autocomplete="off">
                    @error('branch')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror ()
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="cust_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer
                        ID</label>
                    <input type="text" name="cust_id" id="cust_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('cust_id') ? '' : old('cust_id') }}" autocomplete="off">

                    {{-- Menampilkan Pesan Error --}}
                    @error('cust_id')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror ()
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="nameuser"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" name="nameuser" id="nameuser"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('nameuser') ? '' : old('nameuser') }}" autocomplete="off">
                    @error('nameuser')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror ()
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="cae"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CAE</label>
                    <input type="text" name="cae"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('cae') ? '' : old('cae') }}" autocomplete="off">
                    @error('cae')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror ()
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit
                        Head</label>
                    <input type="text" name="unit_head"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('unit_head') ? '' : old('unit_head') }}" autocomplete="off">
                    @error('unit_head')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror ()
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Effective
                        Date</label>
                    <input type="date" name="eff_dt" id="eff_dt"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('eff_dt') ? '' : old('eff_dt') }}" autocomplete="off">
                    @error('eff_dt')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror ()

                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contract
                        Period (Month)
                    </label>
                    <input type="number" name="contr_period" id="contr_period"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('contr_period') ? '' : old('contr_period') }}" autocomplete="off">
                    @error('contract_period')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror ()
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expired
                        Date Contract
                    </label>
                    <input type="date" name="exp_dt" id="exp_dt" readonly
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">
                </div>

                <script>
                    // Fungsi untuk menambahkan bulan ke tanggal dan mengurangi 1 hari
                    function hitungKadaluarsa(date, months) {
                        const hasil = new Date(date);
                        // Tambah periode (bulan) ke tanggal efektif
                        hasil.setMonth(hasil.getMonth() + parseInt(months));
                        // Kurangi 1 hari
                        hasil.setDate(hasil.getDate() - 1);
                        // Format jadi YYYY-MM-DD
                        return hasil.toISOString().split('T')[0];
                    }

                    // Event listener ketika kontrak period diubah
                    document.getElementById('contr_period').addEventListener('input', function() {
                        const effDate = document.getElementById('eff_dt').value;
                        const periode = this.value;

                        if (effDate && periode) {
                            const expDate = hitungKadaluarsa(effDate, periode);
                            document.getElementById('exp_dt').value = expDate;
                        }
                    });
                </script>

                <div class="relative z-0 w-full group col-span-full">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service
                        Type
                    </label>
                    <textarea name="serv_ty" rows="5"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $errors->has('serv_ty') ? '' : old('serv_ty') }}</textarea>
                    @error('serv_ty')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror ()
                </div>


                <div class="relative z-0 w-full mb-5 group col-span-full">
                    <div class="flex items-center justify-end gap-x-6 ">
                        <a href="{{ route('contract.index') }}" type="button"
                            class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </div>
        </form>
    </div>
    </div>

</x-layout>
