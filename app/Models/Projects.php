<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'developer_id'
    ];

    public function Developer(){
        
        return $this->belongsTo(related:Developer::class);
    }
}
