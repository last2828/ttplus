<?php

use App\Models\Blog\PostType;
use Illuminate\Database\Seeder;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_types')->delete();

        PostType::create([
            'name' => 'Статья'
        ]);

        PostType::create([
            'name' => 'Документ'
        ]);
        PostType::create([
            'name' => 'Видео'
        ]);
    }
}