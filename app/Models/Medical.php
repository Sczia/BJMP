<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $table = 'medical';
        public $timestamps = false;
        public $guarded = [];
}
