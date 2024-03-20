<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_table extends Model
{
    public $table = 'student';
    public $primaryKey = 'id';
    public $incrementing = 'true';
    public $timestamps = 'false';
    protected $fillable = ['name'];
}
