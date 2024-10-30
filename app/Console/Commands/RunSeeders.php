<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunSeeders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:seeders {--force : force the operation without confirmation }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run all seeders in order';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $seeders = [ 
            'DatabaseSeeder',
            'CategoriesTableSeeder',
            'ProductsTableSeeder',
        ];

        if($this->option('force') || $this->confirm('Do you really want to perform this operation?')){

            foreach($seeders as $seeder){          
               $SeederName = trim($seeder);
            
               $this->call('db:seed', [
                '--class' => $SeederName,            
               ]);
            }
            
            return $this->info('Operation completed successfully!');
        }

        return $this->info('Operation Cancelled');
    }
}
