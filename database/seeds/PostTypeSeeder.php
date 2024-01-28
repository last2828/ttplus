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
            'name' => 'Article'
        ]);

        PostType::create([
            'id' => '2',
            'name' => 'Document'
        ]);
        PostType::create([
            'id' => '3',
            'name' => 'Video'
        ]);
    }
}
