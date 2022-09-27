<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tipo()
    {
        return $this->belongsTo(TipoProveedor::class,'tipo_proveedors_id');
    }

    public function tipodoc()
    {
        return $this->belongsTo(TipoDocumento::class,'tipo_documento_id');
    }
}
