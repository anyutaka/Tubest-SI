<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function barang(){
        return $this->BelongsTo(Barang::class, 'id_barang');
    }
}