<?php

namespace App\Imports;

use id;
use DateTime;
use Carbon\Carbon;
use App\Models\Contract;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class ContractImport implements ToCollection, ToModel, WithMultipleSheets
{
    private $kolomKe = 0;

    public function sheets(): array
    {
        return [
            new ContractImport()
        ];
    }

    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
    }

    public function model(array $row)
    {
        // dd($row);
        $this->kolomKe++;
        if ($this->kolomKe > 1) {
            $duplikat = Contract::where('cust_id', '=', $row[1])->count();
            if (empty($duplikat)) {
                $contract = new Contract();
                $contract->branch = $row[0];
                $contract->cust_id = $row[1];
                $contract->nameuser = $row[2];
                $contract->cae = $row[3];
                $contract->unit_head = $row[4];
                $contract->cpart_pic_lst = $row[5];
                $contract->unit_head_id = Auth::id();
                $contract->serv_ty = $row[6];

                // Cek apakah eff_dt adalah serial number dari Excel
                $contract->eff_dt = $this->convertExcelDate($row[7]);
                $contract->exp_dt = $this->calculateEDate($row[7], $row[9]);

                $contract->contr_period = $row[9];
                $contract->save();
            }
        }
    }


    /**
     * Mengonversi serial number dari Excel menjadi format tanggal
     */
    private function convertExcelDate($value)
    {
        // Jika nilai kosong, return null
        if (empty($value)) {
            return null;
        }

        // Pastikan nilai bukan string seperti 'Effective Date'
        if (!is_numeric($value) && !Carbon::hasFormat($value, 'd/m/Y') && !Carbon::hasFormat($value, 'Y-m-d')) {
            return null;
        }

        // Jika nilai adalah serial number dari Excel, konversi ke DateTime
        if (is_numeric($value)) {
            return ExcelDate::excelToDateTimeObject($value)->format('Y-m-d');
        }

        // Jika sudah berupa tanggal dalam format string (misal d/m/Y), gunakan Carbon untuk parsing
        if (Carbon::hasFormat($value, 'd/m/Y')) {
            return Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
        }

        // Jika sudah dalam format MySQL (Y-m-d), langsung return
        return $value;
    }

    private function calculateEDate($startDate, $months)
    {
        // Konversi tanggal awal
        $startDate = $this->convertExcelDate($startDate);
        if (!$startDate || !is_numeric($months)) {
            return null;
        }

        // Tambahkan bulan ke tanggal awal menggunakan Carbon, lalu kurangi 1 hari
        $endDate = Carbon::parse($startDate)->addMonths($months)->subDay();
        return $endDate->format('Y-m-d');
    }
}
