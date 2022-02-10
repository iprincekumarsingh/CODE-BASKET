<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunities_category extends Model
{
    use HasFactory;
    protected  $table = "opportunities_category";
    protected $primary_key = "op_id";
}
