<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function gudang(){
        return $this->BelongsTo(Gudang::class, 'id_gudang');
    }
    public function outlet(){
        return $this->BelongsTo(Outlet::class, 'id_outlet');
    }
}