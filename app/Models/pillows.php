<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\size_pillows;
use App\Models\Size_Pillows_MM;

class pillows extends Model
{
    use HasFactory;
    protected $fillable = [	'product', 'category', 'size_inch', 'size_mm', 'price', 'image', 'image2', 'display'];
    public function pillow_size_mm()
    {
        return $this->belongsTo(Size_Pillows_MM::class, 'size_mm');
    }
    public function pillow_size_inch()
    {
        return $this->belongsTo(size_pillows::class, 'size_inch');
    }
}
