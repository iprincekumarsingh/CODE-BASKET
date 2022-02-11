<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunitie extends Model
{
    use HasFactory;
    protected $table = "opportunities";
    protected $primaryKey = "opid";
}
