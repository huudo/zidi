<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\SubCategory;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_mypham = SubCategory::where('name','mypham')->first();
        $category_quanao = SubCategory::where('name','quanao')->first();
        $category_trangsuc = SubCategory::where('name','trangsuc')->first();
        $category_samnam = SubCategory::where('name','samnam')->first();
        $category_linhchi = SubCategory::where('name','linhchi')->first();

        $product = new Product();
        $product->title = "Kem Dưỡng da ban đêm";
        $product->description = "Kem dưỡng gia tinh dầu nghệ";
        $product->price = 120000;
        $product->subcategory_id = $category_mypham->id;
        $product->save();
        
        $product = new Product();
        $product->title = "Áo Nike";
        $product->description = "Áo Nike nhập khẩu nguyên chiếc";
        $product->price = 500000;
        $product->subcategory_id = $category_quanao->id;
        $product->save();

        $product = new Product();
        $product->title = "Nhân sâm 6 tuổi";
        $product->description = "Nhân sâm 6 tuổi 1 hộp 5 kg";
        $product->price = 15000000;
        $product->subcategory_id = $category_samnam->id;
        $product->save();

        $product = new Product();
        $product->title = "Linh chi 1 năm";
        $product->description = "Linh chi";
        $product->price = 15000000;
        $product->subcategory_id = $category_linhchi->id;
        $product->save();
    }
}
