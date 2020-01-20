<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'start_date'];

    // Per ogni task corrisponde uno e uno solo employee
    public function employee(){
        return $this -> belongsTo(Employee::class);
    }
}
