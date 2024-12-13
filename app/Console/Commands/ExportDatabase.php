<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        // Tentukan nama file untuk output
        $filename = 'contract-cso' . '.sql';

        // Tentukan lokasi file di dalam storage
        $path = storage_path("app/backup/{$filename}");

        // Dapatkan konfigurasi database dari environment file
        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $host = config('database.connections.mysql.host');

        // Membuat Kondisi Dimana Ketika Aplikasi Ini Dijalankan Pada OS Windows Atau Yang Lain Nya 
        if (PHP_OS === 'WINNT') {
            $command = "mysqldump --user={$username} --password={$password} --host={$host} {$database} > {$path}";
        } else {
            $command = "mysqldump --user={$username} --password={$password} --host={$host} {$database} > {$path}";
        }

        // Jalankan perintah
        $output = null;
        $result = null;
        exec($command, $output, $result);

        foreach ($output as $item) {
            $this->info($item);
        }

        // Cek jika perintah berhasil
        if ($result === 0) {
            $this->info("Database has been successfully exported to {$path}");
        } else {
            $this->error("There was an error exporting the database.");
        }
    }
}
