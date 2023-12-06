<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size_Pillows_MM extends Model
{
    use HasFactory;
    
    protected $fillable = [	'size_length_mm', 'size_breadth_mm', 'unit'];
}
