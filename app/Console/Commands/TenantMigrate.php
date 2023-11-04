<?php

namespace App\Console\Commands;

use App\Models\Tenant;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use DB;
use Exception;
use Illuminate\Support\Facades\Artisan;

class TenantMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:migrate';

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
        $tenants = Tenant::all();
        try {
            foreach ($tenants as $key => $tenant) :
                Config::set('database.connections.mysql.database', $tenant->database);
                //DB::purge('mysql');
                DB::reconnect('mysql');
                Artisan::call("migrate", ['--path' => '/database/migrations/tenant']);
                $this->info('Migration successfull for ' . $tenant->database);
            endforeach;
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
