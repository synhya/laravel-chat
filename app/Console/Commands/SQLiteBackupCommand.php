<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class SQLiteBackupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup-sqlite';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup the SQLite database.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sourcePath = config('database.connections.sqlite.database');
        $destinationPath = 'backups/' . now()->format('Y-m-d_H-i-s') . '.sqlite';

        if (file_exists($sourcePath)) {
            Storage::disk('local')->copy($sourcePath, $destinationPath);
            $this->info('SQLite database backup created successfully: ' . $destinationPath);
        } else {
            $this->error('SQLite database file not found: ' . $sourcePath);
        }
    }
}
