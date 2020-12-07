<?php

use App\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      ProductCategory::truncate();
        $categoriesDunkermotoren = [
            'name' => 'Dunkermotoren',
            'slug' => Transliterate::slugify('Dunkermotoren'),
        
            'children' => [
                [
                    'id' => '2',
                    'name' => 'BG | Brushless DC Motors',
                    'slug' => Transliterate::slugify('BG | Brushless DC Motors'),
                ],
                [
                    'id' => '3',
                    'name' => 'GR/G | Brushed DC Motors',
                    'slug' => Transliterate::slugify('GR/G | Brushed DC Motors'),
                ],
                [
                    'id' => '4',
                    'name' => 'KD/DR | AC motors',
                    'slug' => Transliterate::slugify('KD/DR | AC motors'),
                ],
                [
                    'id' => '5',
                    'name' => 'ST | Stepper Motors (MAE)',
                    'slug' => Transliterate::slugify('DSST | Stepper Motors (MAE)'),
                ],
                [
                    'id' => '6',
                    'name' => 'D/DCD | Venetian blind drives',
                    'slug' => Transliterate::slugify('D/DCD | Venetian blind drives'),
                ],
                [
                    'id' => '7',
                    'name' => 'PLG/SG/STG | Gearboxes',
                    'slug' => Transliterate::slugify('PLG/SG/STG | Gearboxes'),
                ],
                [
                    'id' => '8',
                    'name' => 'ST/CASM/LSM | Linear Systems',
                    'slug' => Transliterate::slugify('ST/CASM/LSM | Linear Systems'),
                ],
                [
                    'id' => '9',
                    'name' => 'BGE | Controllers',
                    'slug' => Transliterate::slugify('BGE | Controllers'),
                ],
                [
                    'id' => '10',
                    'name' => 'E | Brakes',
                    'slug' => Transliterate::slugify('E | Brakes'),
                ],
                [
                    'id' => '11',
                    'name' => 'RE/TG/ME/AE | Encoders',
                    'slug' => Transliterate::slugify('RE/TG/ME/AE | Encoders'),
                ],
                [
                    'id' => '12',
                    'name' => 'Blowers (MAE)',
                    'slug' => Transliterate::slugify('Blowers (MAE)'),
                ],
                [
                    'id' => '13',
                    'name' => 'Systems',
                    'slug' => Transliterate::slugify('Systems'),
                ],
            ],
        ];

        $categoriesJianghai = [
          'name' => 'Jianghai',
          'slug' => Transliterate::slugify('Jianghai'),

          'children' => [
            [
              'name' => 'Polymer',
              'slug' => Transliterate::slugify('Polymer'),
            ],
            [
              'name' => 'Radial',
              'slug' => Transliterate::slugify('Radial'),
            ],
            [
              'name' => 'Snap-in',
              'slug' => Transliterate::slugify('Snap-in'),
            ],
            [
              'name' => 'Screw',
              'slug' => Transliterate::slugify('Screw'),
            ],
            [
              'name' => 'Film Capacitors',
              'slug' => Transliterate::slugify('Film Capacitors'),
            ],
          ]
        ];

        ProductCategory::create($categoriesDunkermotoren);
        ProductCategory::create($categoriesJianghai);
    }
}
