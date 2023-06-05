<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function rute(){
        return $this->BelongsTo(Rute::class, 'id_rute');
    }
    public function supir(){
        return $this->BelongsTo(Supir::class, 'id_supir');
    }
    public function truk(){
        return $this->BelongsTo(Truk::class, 'id_truk');
    }
}
