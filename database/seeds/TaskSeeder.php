<?php

use Illuminate\Database\Seeder;
//Aggiungere i due Model 
use App\Task;
use App\Employee;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Procedimento per dare la foreign key alla tabella task
        factory(Task::class, 100) -> make() -> each(function($task){
            $emp = Employee::inRandomOrder() -> first();
            // Funzione employee() che troviamo nella classe Task.php
            $task -> employee() -> associate($emp);
            $task -> save();
        });
    }
}
