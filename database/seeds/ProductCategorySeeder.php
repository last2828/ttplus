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
        $categories = [
            'name' => 'Dunkermotoren',
            'slug' => Transliterate::slugify('Dunkermotoren'),
        
            'children' => [
                [
                    'name' => 'BG | EC Motors',
                    'slug' => Transliterate::slugify('BG | EC Motors'),
                ],
                [
                    'name' => 'GR/G | Brushed DC Motors',
                    'slug' => Transliterate::slugify('GR/G | Brushed DC Motors'),
                ],
                [
                    'name' => 'KD/DR | AC motors',
                    'slug' => Transliterate::slugify('KD/DR | AC motors'),
                ],
                [
                    'name' => 'DSST | Stepper Motors',
                    'slug' => Transliterate::slugify('DSST | Stepper Motors'),
                ],
                [
                    'name' => 'D/DCD | Venetian blind drives',
                    'slug' => Transliterate::slugify('D/DCD | Venetian blind drives'),
                ],
                [
                    'name' => 'PLG/SG/STG | Gearboxes',
                    'slug' => Transliterate::slugify('PLG/SG/STG | Gearboxes'),
                ],
                [
                    'name' => 'BGE | Controllers',
                    'slug' => Transliterate::slugify('BGE | Controllers'),
                ],
                [
                    'name' => 'Brakes and Encoders',
                    'slug' => Transliterate::slugify('Brakes and Encoders'),
                ],
                [
                    'name' => 'Linear Systems',
                    'slug' => Transliterate::slugify('Linear Systems'),
                ],
                [
                    'name' => 'BL | Blowers',
                    'slug' => Transliterate::slugify('BL | Blowers'),
                ],
            ],
        ];

        ProductCategory::create($categories);
    }
}
