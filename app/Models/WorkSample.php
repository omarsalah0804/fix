<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSample extends Model
{
    use HasFactory;
    protected $fillable = [

        'worker_id',

        'image1',
        'image2',
        'image3',
        'image4',



    ];
}
