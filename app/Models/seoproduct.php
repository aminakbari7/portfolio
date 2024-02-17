<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seoproduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'project_id'
    ];
}
