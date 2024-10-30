<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunMigrations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:migrations {--force : force the operation without confirmation }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run all migrations in order';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $migrations = [ 
            '0001_01_01_000000_create_users_table.php',
            '0001_01_01_000001_create_cache_table.php',
            '0001_01_01_000002_create_jobs_table.php',
            '2024_10_27_005002_create_categories_table.php',
            '2024_10_27_005034_create_products_table.php',
            '2024_10_27_005210_create_orders_table.php',
            '2024_10_27_005329_create_orders_items_table.php',
            '2024_10_29_235200_create_inventory_table.php',
            '2024_10_30_012228_create_inventory_movements_table.php'
        ];

        if($this->option('force') || $this->confirm('Do you really want to perform this operation?')){

            foreach($migrations as $migration){
                $basePath = 'database/migrations/';          
                $migrationName = trim($migration);
                $path = $basePath.$migrationName;
                $this->call('migrate', [
                    '--path' => $path ,            
                ]);
            }
             
            return $this->info('Operation completed successfully!');
         }
 
         return $this->info('Operation Cancelled');
    }
}
