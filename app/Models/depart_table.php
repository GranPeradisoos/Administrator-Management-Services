<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depart_table extends Model
{
    public $table = 'depart';
    public $primaryKey = 'id';
    public $incrementing = 'true';
    public $timestamps = 'false';
    protected $fillable = ['name'];
}
