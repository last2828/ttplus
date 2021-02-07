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
            'id' => '1',
            'name' => 'Статья'
        ]);

        PostType::create([
            'id' => '2',
            'name' => 'Документ'
        ]);
        PostType::create([
            'id' => '3',
            'name' => 'Видео'
        ]);
    }
}
