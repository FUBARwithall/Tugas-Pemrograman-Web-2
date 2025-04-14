<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Categories
{
    //ibaratkan ini ada list data yang ada di database
    private static $product_categories = [
        [
            'id'=> 1,
            'name' => 'pria',
            'slug' => 'pakaian-pria',
            'description' => 'Ini adalah produk pakaian pria',
            'image' => 'images\no_brand_miller_kemeja_pria_polos_panjang_slim_fit_--_baju_kantor_pria_-_pns_-_office_full01_cb4xxhhz.webp',
        ],
        [
            'id'=> 2,
            'name' => 'wanita',
            'slug' => 'Pakaian Wanita',
            'description' => 'Ini adalah produk pakaian wanita',
            'image' => 'images\br-m036969-02424_pakaian-wanita-muslimah-dress-maxi-reline-maxi-busui-size-jumbo-ld108-gamis-muslimah-shakila-import_full01.webp',
        ],
        [
            'id'=> 3,
            'name' => 'anak-anak',
            'slug' => 'Pakaian Anak-Anak',
            'description' => 'Ini adalah produk pakaian anak-anak',
            'image' => 'images\model-gamis-anak-umur-5-tahun-pakaian-muslim-anak-perempuan-murah-upright.webp',
        ],
        [
            'id'=> 4,
            'name' => 'aksesori',
            'slug' => 'Aksesori',
            'description' => 'Ini adalah produk aksesori',
            'image' => 'images\3e8e70f81d09429981abbe444d33f822.webp',
        ],
        [
            'id'=> 5,
            'name' => 'sepatu',
            'slug' => 'Sepatu',
            'description' => 'Ini adalah produk sepatu',
            'image' => 'images\0cb3d7c6d5cb9b5660fea9726ad9d19c.jpg.webp',
        ]
    ];
    //kita buatkan function untuk mengambil data dari array diatas
    public static function all()
    {
    return self::$product_categories;
    }

    public static function find($slug){
        $categories = self::all();
            foreach ($categories as $category) {
                if ($category['slug'] === $slug) {
            return $category;
        }
    }
        return null;
    }
}