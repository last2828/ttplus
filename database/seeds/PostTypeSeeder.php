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
        'name' => 'Статья'
      ]);

      Type::create([
        'name' => 'Документ'
      ]);
      Type::create([
        'name' => 'Видео'
      ]);
    }
}
