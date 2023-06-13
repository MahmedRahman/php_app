<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;
    protected $table = 'versions'; // This is the table name in your database

    protected $fillable = ['version', 'datecreate']; // The attributes that are mass assignable.

}
