<?php

use Illuminate\Database\Seeder;
use App\SubCategory;
use App\Category;
class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_health = Category::where('name','health')->first();
        $category_beauty = Category::where('name','beauty')->first();
        $category_lovely = Category::where('name','lovely')->first();

        $sub = new SubCategory();
        $sub->name = 'mypham';
        $sub->description = "Mỹ phẩm";
        $sub->category_id = $category_beauty->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'quanao';
        $sub->description = "Quần áo";
        $sub->category_id = $category_beauty->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'trangsuc';
        $sub->description = "Trang sức";
        $sub->category_id = $category_beauty->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'samnam';
        $sub->description = "Sâm nấm";
        $sub->category_id = $category_health->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'linhchi';
        $sub->description = "Linh chi";
        $sub->category_id = $category_health->id;
        $sub->save();

        $sub = new SubCategory();
        $sub->name = 'chucnang';
        $sub->description = "Thực phẩm chức năng";
        $sub->category_id = $category_health->id;
        $sub->save();

    }
}
