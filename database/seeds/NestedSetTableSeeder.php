<?php

use Illuminate\Database\Seeder;

class NestedSetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $node = App\NestedSetModel::create([
            'name' => 'Foo',
            'children' => [
                [
                    'name' => 'Bar',
                    'children' => [
                        ['name' => 'Baz'],
                    ],
                ],
            ],
        ]);
    }
}
