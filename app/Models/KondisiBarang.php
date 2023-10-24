<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KondisiBarang extends Model
{
    use HasFactory;

    protected $table = 'kondisi_barangs';
    protected $fillable = ["keterangan_kondisi"];

    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
