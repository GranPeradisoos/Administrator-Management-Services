<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cources_table extends Model
{
    public $table = 'cources';
    public $primaryKey = 'id';
    public $incrementing = 'true';
    public $timestamps = 'false';
}
