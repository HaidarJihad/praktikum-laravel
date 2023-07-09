<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;

class kategoriproduk extends Model
{
    use HasFactory;
        //memanggil table yang akan dikelola
        protected $table = 'kategori_produk';
        public $timetamps = false;
        //mendklarasikan kolom yang ada dalam table
        protected $fillable = [
            'nama'
        ];
        public function produk(){
            return $this->hasMany(produk::class);
        }
        public function getAllData()
        {
        return DB::table('kategori_produk')
            ->select('kategori_produk.*')
            ->get();
        }
}