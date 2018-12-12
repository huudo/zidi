<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
      	$category->name = "health";
      	$category->description = "Khỏe";
      	$category->save();

      	$category = new Category();
      	$category->name = "beauty";
      	$category->description = "Đẹp";
      	$category->save();

      	$category = new Category();
      	$category->name = "lovely";
      	$category->description = "Yêu đời";
      	$category->save();

        
    }
}
