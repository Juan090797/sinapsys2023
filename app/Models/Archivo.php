<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
