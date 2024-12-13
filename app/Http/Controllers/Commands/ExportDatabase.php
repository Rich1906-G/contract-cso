<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:export-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Menentukan Nama File Sql Nya 
        $namaFile = 'contract-cso' . '.sql';

        // Menentukan Lokasi File Di Dalam Storage (Penyimpanan)
        $lokasiFile = storage_path("app/backup/{$namaFile}");

        // Cek dan buat folder jika belum ada
        if (!is_dir(storage_path('app/backup'))) {
            mkdir(storage_path('app/backup'), 0755, true);
        }

        // Mendapatkan Konfigurasi database Dari File Environment 
        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $host = config('database.connections.mysql.host');

        // Perintah Untuk Melakukan Dump Database Dengan Menggunakan MySqlDump
        $perintah = "mysqldump --user={$username} --password={$password} --host={$host} {$database} > {$lokasiFile}";

        // Menjalankan Perintah 
        $output = null;
        $hasil = null;
        exec($perintah, $output, $hasil);

        // Mengecek Apakah Sukses 
        if ($hasil === 0) {
            $this->info("Database Berhasil Di Export Ke {$lokasiFile}");
        } else {
            $this->error("Database Gagal di Export.");
        }
    }
}
