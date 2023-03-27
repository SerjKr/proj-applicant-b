<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fib extends Model
{
    use HasFactory;

    protected $table = 'fibs';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
