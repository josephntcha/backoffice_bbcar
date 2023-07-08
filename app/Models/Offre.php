<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $guarded=[];
    protected $connection = 'mysql2';
    protected $table=('offres');
    use HasFactory;
}
