<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $table = 'health_declaration';
    public $timestamps = false;
    public $guarded = [];
}
