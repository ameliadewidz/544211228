<?php 

namespace Database\Seeders; 

use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB;  

class Produk2TableSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     */ 
    public function run(): void 
    { 
        DB::table('produk2')->insert(array( 
            ['nama_produk'=>'Sabun Lifebuoy','harga_jual'=>'2000', 'harga_beli'=>'1000'], 
            ['nama_produk'=>'Shampoo Sunsilk','harga_jual'=>'4000', 'harga_beli'=>'2000'] 
    )); 
    } 
}