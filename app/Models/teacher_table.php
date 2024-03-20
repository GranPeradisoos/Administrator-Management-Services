<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher_table extends Model
{
    public $table = 'teacher';
    public $primaryKey = 'id';
    public $incrementing = 'true';
    public $timestamps = 'false';
    protected $fillable = ['name'];
}
