<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymode extends Model
{
    use HasFactory;

    protected $table = 'paymode';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
