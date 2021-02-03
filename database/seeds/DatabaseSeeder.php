<?php

use App\Models\Blog\Post;
use App\Models\Catalog\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductGroupSeeder::class);
        $this->call(ProductAttributeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(PostTypeSeeder::class);
        factory(Post::class, 30)->create();
        factory(Product::class, 100)->create();
    }
}
