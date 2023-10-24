<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $fillable = ["nama", "jenis", "kondisi_br", "harga", "keterangan", "kecacatan", "jumlah_barang", "foto"];

    public function jenis(){
        return $this->belongsTo(JenisBarang::class);
    }

    public function kondisi(){
        return $this->belongsTo(KondisiBarang::class);
    }
}
