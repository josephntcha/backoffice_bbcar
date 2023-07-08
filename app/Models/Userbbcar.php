<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userbbcar extends Model
{

    protected $guarded=[];
    protected $connection = 'mysql2';
    protected $table=('users');
    use HasFactory;
}
