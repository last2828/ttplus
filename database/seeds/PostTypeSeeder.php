<?php

use App\Type;
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
      Type::truncate();

      Type::create([
        'name' => 'post'
      ]);

      Type::create([
        'name' => 'file'
      ]);
      Type::create([
        'name' => 'video'
      ]);
    }
}
