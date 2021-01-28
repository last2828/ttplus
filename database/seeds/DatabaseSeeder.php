<?php

use App\Models\Blog\Post;
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
    }
}
