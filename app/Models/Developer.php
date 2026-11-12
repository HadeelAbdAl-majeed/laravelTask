<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'name',
        'job_title',
        'skills'=>'array'
    ];

    public function Skills(){
        
        return $this->belongsTo(related:Skills::class);
    }
}
