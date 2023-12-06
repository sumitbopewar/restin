<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size_pillows extends Model
{
    use HasFactory;
    protected $fillable = [	'size_length', 'size_breadth', 'unit'];
}
