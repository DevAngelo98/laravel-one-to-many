<?php

use App\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // Rapporto sequenziale tra employee e task
            EmployeeSeeder::class,
            TaskSeeder::class
        ]);
    }
}
