<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div class="row container mx-auto p-8 md:container md:mx-auto md:p-0">
        <div class="col-md-1"></div>
        <form action="{{ route('contract.update', $contract) }}" method="POST">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                @csrf
                @method('PUT')
                {{-- Company --}}
                <div class="sm:col-span-2 mb-5">
                    <label for="cpart_pic_lst"
                        class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                    <input type="text" name="cpart_pic_lst"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" value="{{ $errors->has('cpart_pic_lst') ? '' : $contract->cpart_pic_lst }}"
                        autocomplete="off">
                    @error('cpart_pic_lst')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Branch --}}
                <div class="relative z-0 w-full mb-5 group">
                    <label for="branch"
                        class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Branch</label>
                    <input type="text" name="branch"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" value="{{ $errors->has('branch') ? '' : $contract->branch }}"
                        autocomplete="off">
                    @error('branch')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Costumer ID --}}
                <div class="relative z-0 w-full mb-5 group">
                    <label for="cust_id" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Customer
                        ID</label>
                    <input type="text" name="cust_id" id="cust_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" value="{{ $errors->has('cust_id') ? '' : $contract->cust_id }}"
                        autocomplete="off">
                    {{-- Menampilkan Pesan Error --}}
                    @error('cust_id')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Username --}}
                <div class="relative z-0 w-full mb-5 group">
                    <label for="nameuser"
                        class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" name="nameuser"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('nameuser') ? '' : $contract->nameuser }}" autocomplete="off">
                    @error('nameuser')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- CAE --}}
                <div class="relative z-0 w-full mb-5 group">
                    <label for="cae"
                        class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">CAE</label>
                    <input type="text" name="cae"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('cae') ? '' : $contract->cae }}" autocomplete="off">
                    @error('cae')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Unit Head --}}
                <div class="relative z-0 w-full mb-5 group">
                    <label for="unit_head" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Unit
                        Head</label>
                    <input type="text" name="unit_head"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $errors->has('unit_head') ? '' : $contract->unit_head }}" autocomplete="off">
                    @error('unit_head')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Effective Date --}}
                <div class="relative z-0 w-full mb-5 group">
                    <label for="eff_dt" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Effective
                        Date</label>
                    <input type="date" name="eff_dt" id="eff_dt"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder=""value="{{ $errors->has('eff_dt') ? '' : $contract->eff_dt }}"
                        autocomplete="off">
                    @error('eff_dt')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Contract Period (Month) --}}
                <div class="relative z-0 w-full mb-5 group">
                    <label for="contr_period"
                        class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Contract
                        Period (Month)</label>
                    <input type="number" name="contr_period" id="contr_period"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" value="{{ $errors->has('contr_period') ? '' : $contract->contr_period }}"
                        autocomplete="off">
                    @error('contr_period')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Expired Date Contract --}}
                <div class="relative z-0 w-full mb-5 group">
                    <label for="exp_dt" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Expired
                        Date Contract</label>
                    <input type="date" name="exp_dt" readonly id="exp_dt"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" autocomplete="off">
                </div>

                <script>
                    // Fungsi untuk menambahkan bulan ke tanggal dan mengurangi 1 hari
                    function hitungKadaluarsa(date, months) {
                        const hasil = new Date(date);
                        hasil.setMonth(hasil.getMonth() + parseInt(months)); // Tambah periode (bulan) ke tanggal efektif
                        hasil.setDate(hasil.getDate() - 1); // Kurangi 1 hari
                        return hasil.toISOString().split('T')[0]; // Format jadi YYYY-MM-DD
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

                {{-- Service Type --}}
                <div class="relative z-0 w-full mb-5 group col-span-full">
                    <label for="" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Service
                        Type</label>
                    <textarea id="" name="serv_ty" rows="5"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        autocomplete="off">{{ $errors->has('serv_ty') ? '' : $contract->serv_ty }} </textarea>
                    @error('serv_ty')
                        <div class="text-red-600 text-sm mt-3 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Document Type --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Document
                        Type</label>
                    <select name="doc_ty_cd" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="MOU" {{ old('doc_ty_cd', $contract) == 'MOU' ? 'selected' : '' }}>MOU</option>
                        <option value="ADP" {{ old('doc_ty_cd', $contract) == 'ADP' ? 'selected' : '' }}>ADP</option>
                        <option value="AMP" {{ old('doc_ty_cd', $contract) == 'AMP' ? 'selected' : '' }}>AMP</option>
                        <option value="LOC" {{ old('doc_ty_cd', $contract) == 'LOC' ? 'selected' : '' }}>LOC</option>
                        <option value="OTH" {{ old('doc_ty_cd', $contract) == 'OTH' ? 'selected' : '' }}>Other
                        </option>
                        <option value="PKS" {{ old('doc_ty_cd', $contract) == 'PKS' ? 'selected' : '' }}>PKS</option>
                        <option value="TAC" {{ old('doc_ty_cd', $contract) == 'TAC' ? 'selected' : '' }}>TAC</option>
                    </select>
                </div> --}}

                {{-- CP Name --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CP
                        Name</label>
                    <select name="cpart_pic_lst" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="PT. Acuatico Air Indonesia"
                            {{ old('cpart_pic_lst', $contract) == 'PT. Acuatico Air Indonesia' ? 'selected' : '' }}>PT.
                            Acuatico Air Indonesia</option>
                        <option value="PT Pertamina"
                            {{ old('cpart_pic_lst', $contract) == 'PT Pertamina' ? 'selected' : '' }}>PT Pertamina
                        </option>
                        <option value="PT Indofood Sukses Makmur"
                            {{ old('cpart_pic_lst', $contract) == 'PT Indofood Sukses Makmur' ? 'selected' : '' }}>PT
                            Indofood Sukses Makmur</option>
                    </select>
                </div> --}}

                {{-- Issued By --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="" cl ass="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Issued
                        By</label>
                    <select name="doc_isu_cd" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="CPA" {{ old('doc_isu_cd', $contract) == 'CPA' ? 'selected' : '' }}>CPA
                        </option>
                        <option value="C2D" {{ old('doc_isu_cd', $contract) == 'C2D' ? 'selected' : '' }}>C2D
                        </option>
                        <option value="CBN" {{ old('doc_isu_cd', $contract) == 'CBN' ? 'selected' : '' }}>
                            CBN</option>
                        <option value="CP" {{ old('doc_isu_cd', $contract) == 'CP' ? 'selected' : '' }}>
                            Conter Part</option>
                    </select>
                </div> --}}

                {{-- Review By --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Review
                        By</label>
                    <input type="text" name="revw_by"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required="" value="{{ old('revw_by', $contract->revw_by) }}"
                        autocomplete="off">
                </div> --}}

                {{-- Review Date --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Review
                        Date</label>
                    <input type="date" name="revw_on"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required="" value="{{ old('revw_on', $contract->revw_on) }}">
                </div> --}}

                {{-- CP Document No --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CP
                        Document No</label>
                    <input type="text" name="cpart_doc_no"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required="" value="{{ old('cpart_doc_no', $contract->cpart_doc_no) }}">
                </div> --}}


                {{-- Check se CBN Doc Number --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label class="inline-flex items-center mb-5 cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Use CBN Doc
                            Number</span>
                    </label>
                </div> --}}

                {{-- Doc No --}}
                {{-- <div class="sm:col-span-2 mb-5sm:col-span-2 mb-5">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doc.
                        No</label>
                    <select name="cbn_doc_no" id=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="Wharehouse (WRH)"
                            {{ old('cbn_doc_no', $contract) == 'Wharehouse (WRH)' ? 'selected' : '' }}>Wharehouse (WRH)
                        </option>
                        <option value="ATC" {{ old('cbn_doc_no', $contract) == 'ATC' ? 'selected' : '' }}>ATC
                        </option>
                        <option value="CAT" {{ old('cbn_doc_no', $contract) == 'CAT' ? 'selected' : '' }}>CAT
                        </option>
                    </select>
                </div> --}}

                {{-- Document Date --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document
                        Date</label>
                    <input type="date" name="doc_dt"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required="" value="{{ old('doc_dt', $contract->doc_dt) }}">
                </div> --}}

                {{-- Description --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <input type="text" name="doc_desc"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required="" value="{{ old('doc_desc', $contract->doc_desc) }}"
                        autocomplete="off">
                </div> --}}

                {{-- Signer --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Signer</label>
                    <input type="text" name="cbn_signer"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required="" value="{{ old('cbn_signer', $contract->cbn_signer) }}"
                        autocomplete="off">
                </div> --}}

                {{-- CP Singer --}}
                {{-- <div class="relative z-0 w-full mb-5 group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CP
                        Signer</label>
                    <input type="text" name="cpart_signer"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required="" value="{{ old('cpart_signer', $contract->cpart_signer) }}"
                        autocomplete="off">
                </div> --}}

                {{-- Note --}}
                {{-- <div class="relative z-0 w-full mb-5 group col-span-full">
                    <label for=""
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Note</label>
                    <textarea id="" name="notes" rows="5"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ old('notes', $contract->notes) }}</textarea>
                </div> --}}
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('contract.index') }}" type="button"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
    </div>

</x-layout>
