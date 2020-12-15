<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::truncate();

        $groups = [
          [
            'name' => 'BGA22',
            'slug' => Transliterate::slugify('BGA22'),
            'category_id' => '2',
          ],
          [
            'name' => 'BG32',
            'slug' => Transliterate::slugify('BG32'),
            'category_id' => '2',
          ],
          [
            'name' => 'BG42',
            'slug' => Transliterate::slugify('BG42'),
            'category_id' => '2',
          ],
          [
            'name' => 'BG45',
            'slug' => Transliterate::slugify('BG45'),
            'category_id' => '2',
          ],
          [
            'name' => 'BG62S',
            'slug' => Transliterate::slugify('BG62S'),
            'category_id' => '2',
          ],
          [
            'name' => 'BG65',
            'slug' => Transliterate::slugify('BG65'),
            'category_id' => '2',
          ],
          [
            'name' => 'BG65S',
            'slug' => Transliterate::slugify('BG65S'),
            'category_id' => '2',
          ],
          [
            'name' => 'BG66',
            'slug' => Transliterate::slugify('BG66'),
            'category_id' => '2',
          ],
          [
            'name' => 'BG75',
            'slug' => Transliterate::slugify('BG75'),
            'category_id' => '2',
          ],
          [
            'name' => 'BG95',
            'slug' => Transliterate::slugify('BG95'),
            'category_id' => '2',
          ],
          [
            'name' => 'G30.1/2',
            'slug' => Transliterate::slugify('G30.1/2'),
            'category_id' => '3',
          ],
          [
            'name' => 'G30.0',
            'slug' => Transliterate::slugify('G30.0'),
            'category_id' => '3',
          ],
          [
            'name' => 'GR42',
            'slug' => Transliterate::slugify('GR42'),
            'category_id' => '3',
          ],
          [
            'name' => 'GR53',
            'slug' => Transliterate::slugify('GR53'),
            'category_id' => '3',
          ],
          [
            'name' => 'GR63',
            'slug' => Transliterate::slugify('GR63'),
            'category_id' => '3',
          ],
          [
            'name' => 'GR80',
            'slug' => Transliterate::slugify('GR80'),
            'category_id' => '3',
          ],
          [
            'name' => 'KD/DR 52.1',
            'slug' => Transliterate::slugify('KD/DR 52.1'),
            'category_id' => '4',
          ],
          [
            'name' => 'KD/DR 52.0',
            'slug' => Transliterate::slugify('KD/DR 52.0'),
            'category_id' => '4',
          ],
          [
            'name' => 'KD/DR 62.1',
            'slug' => Transliterate::slugify('KD/DR 62.1'),
            'category_id' => '4',
          ],
          [
            'name' => 'KD/DR 62.0',
            'slug' => Transliterate::slugify('KD/DR 62.0'),
            'category_id' => '4',
          ],
          [
            'name' => 'D259',
            'slug' => Transliterate::slugify('D259'),
            'category_id' => '6',
          ],
          [
            'name' => 'D339',
            'slug' => Transliterate::slugify('D339'),
            'category_id' => '6',
          ],
          [
            'name' => 'D358',
            'slug' => Transliterate::slugify('D358'),
            'category_id' => '6',
          ],
          [
            'name' => 'D359',
            'slug' => Transliterate::slugify('D359'),
            'category_id' => '6',
          ],
          [
            'name' => 'D838',
            'slug' => Transliterate::slugify('D838'),
            'category_id' => '6',
          ],
          [
            'name' => 'D839',
            'slug' => Transliterate::slugify('D839'),
            'category_id' => '6',
          ],
          [
            'name' => 'D370',
            'slug' => Transliterate::slugify('D370'),
            'category_id' => '6',
          ],
          [
            'name' => 'D539',
            'slug' => Transliterate::slugify('D539'),
            'category_id' => '6',
          ],
          [
            'name' => 'DCD22',
            'slug' => Transliterate::slugify('DCD22'),
            'category_id' => '6',
          ],
          [
            'name' => 'PLG 22',
            'slug' => Transliterate::slugify('PLG 22'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 30',
            'slug' => Transliterate::slugify('PLG 30'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 30H',
            'slug' => Transliterate::slugify('PLG 30H'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 30 H',
            'slug' => Transliterate::slugify('PLG 30 H'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 32',
            'slug' => Transliterate::slugify('PLG 32'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 32H',
            'slug' => Transliterate::slugify('PLG 32H'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 40 LB',
            'slug' => Transliterate::slugify('PLG 40 LB'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 42K',
            'slug' => Transliterate::slugify('PLG 42K'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 42S',
            'slug' => Transliterate::slugify('PLG 42S'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 52',
            'slug' => Transliterate::slugify('PLG 52'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 52H',
            'slug' => Transliterate::slugify('PLG 52H'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 60',
            'slug' => Transliterate::slugify('PLG 60'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 60 LB',
            'slug' => Transliterate::slugify('PLG 60 LB'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 63 EP',
            'slug' => Transliterate::slugify('PLG 63 EP'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 63 HT',
            'slug' => Transliterate::slugify('PLG 63 HT'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 75 EP',
            'slug' => Transliterate::slugify('PLG 75 EP'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 75 HT',
            'slug' => Transliterate::slugify('PLG 75 HT'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 80 LB',
            'slug' => Transliterate::slugify('PLG 80 LB'),
            'category_id' => '7',
          ],
          [
            'name' => 'PLG 95 HT',
            'slug' => Transliterate::slugify('PLG 95 HT'),
            'category_id' => '7',
          ],
          [
            'name' => 'SG 45',
            'slug' => Transliterate::slugify('SG 45'),
            'category_id' => '7',
          ],
          [
            'name' => 'SG 62',
            'slug' => Transliterate::slugify('SG 62'),
            'category_id' => '7',
          ],
          [
            'name' => 'SG 65',
            'slug' => Transliterate::slugify('SG 65'),
            'category_id' => '7',
          ],
          [
            'name' => 'SG 80',
            'slug' => Transliterate::slugify('SG 80'),
            'category_id' => '7',
          ],
          [
            'name' => 'SG 80H',
            'slug' => Transliterate::slugify('SG 80H'),
            'category_id' => '7',
          ],
          [
            'name' => 'SG 80K',
            'slug' => Transliterate::slugify('SG 80K'),
            'category_id' => '7',
          ],
          [
            'name' => 'SG 120',
            'slug' => Transliterate::slugify('SG 120'),
            'category_id' => '7',
          ],
          [
            'name' => 'SG 120H',
            'slug' => Transliterate::slugify('SG 120H'),
            'category_id' => '7',
          ],
          [
            'name' => 'SG 120K',
            'slug' => Transliterate::slugify('SG 120K'),
            'category_id' => '7',
          ],
          [
            'name' => 'DME 230X4-CO',
            'slug' => Transliterate::slugify('DME 230X4-CO'),
            'category_id' => '9',
          ],
          [
            'name' => 'DME 230X4-I/O',
            'slug' => Transliterate::slugify('DME 230X4-I/O'),
            'category_id' => '9',
          ],
          [
            'name' => 'DME 230X4-EC',
            'slug' => Transliterate::slugify('DME 230X4-EC'),
            'category_id' => '9',
          ],
          [
            'name' => 'DME 230X4-PN',
            'slug' => Transliterate::slugify('DME 230X4-PN'),
            'category_id' => '9',
          ],
          [
            'name' => 'BGE3004 A',
            'slug' => Transliterate::slugify('BGE3004 A'),
            'category_id' => '9',
          ],
          [
            'name' => 'BGE5510',
            'slug' => Transliterate::slugify('BGE5510'),
            'category_id' => '9',
          ],
          [
            'name' => 'BGE6005 A',
            'slug' => Transliterate::slugify('BGE6005 A'),
            'category_id' => '9',
          ],
          [
            'name' => 'BGE6010 A',
            'slug' => Transliterate::slugify('BGE6010 A'),
            'category_id' => '9',
          ],
          [
            'name' => 'BGE6015 A',
            'slug' => Transliterate::slugify('BGE6015 A'),
            'category_id' => '9',
          ],
          [
            'name' => 'BGE6060 A',
            'slug' => Transliterate::slugify('BGE6060 A'),
            'category_id' => '9',
          ],
          [
            'name' => 'BGE6060 A EC',
            'slug' => Transliterate::slugify('BGE6060 A EC'),
            'category_id' => '9',
          ],
          [
            'name' => 'E 38R',
            'slug' => Transliterate::slugify('E 38R'),
            'category_id' => '10',
          ],
          [
            'name' => 'E 46A',
            'slug' => Transliterate::slugify('E 46A'),
            'category_id' => '10',
          ],
          [
            'name' => 'E 90R',
            'slug' => Transliterate::slugify('E 90R'),
            'category_id' => '10',
          ],
          [
            'name' => 'E 100A',
            'slug' => Transliterate::slugify('E 100A'),
            'category_id' => '10',
          ],
          [
            'name' => 'E 100R',
            'slug' => Transliterate::slugify('E 100R'),
            'category_id' => '10',
          ],
          [
            'name' => 'E 310R',
            'slug' => Transliterate::slugify('E 310R'),
            'category_id' => '10',
          ],
          [
            'name' => 'E 600R',
            'slug' => Transliterate::slugify('E 600R'),
            'category_id' => '10',
          ],
          [
            'name' => 'AE 38 + Haube',
            'slug' => Transliterate::slugify('AE 38 + Haube'),
            'category_id' => '11',
          ],
          [
            'name' => 'AE 65 + Haube',
            'slug' => Transliterate::slugify('AE 65 + Haube'),
            'category_id' => '11',
          ],
          [
            'name' => 'ME 52-12',
            'slug' => Transliterate::slugify('ME 52-12'),
            'category_id' => '11',
          ],
          [
            'name' => 'ME 80-12',
            'slug' => Transliterate::slugify('ME 80-12'),
            'category_id' => '11',
          ],
          [
            'name' => 'MG 2-2',
            'slug' => Transliterate::slugify('MG 2-2'),
            'category_id' => '11',
          ],
          [
            'name' => 'RE 20S-2-100',
            'slug' => Transliterate::slugify('RE 20S-2-100'),
            'category_id' => '11',
          ],
          [
            'name' => 'RE 22-2-256',
            'slug' => Transliterate::slugify('RE 22-2-256'),
            'category_id' => '11',
          ],
          [
            'name' => 'RE 30-3-500 + TI',
            'slug' => Transliterate::slugify('RE 30-3-500 + TI'),
            'category_id' => '11',
          ],
          [
            'name' => 'RE 30-3-500',
            'slug' => Transliterate::slugify('RE 30-3-500'),
            'category_id' => '11',
          ],
          [
            'name' => 'RE 30-2-500',
            'slug' => Transliterate::slugify('RE 30-2-500'),
            'category_id' => '11',
          ],
          [
            'name' => 'RE 56-3-1000 + TI',
            'slug' => Transliterate::slugify('RE 56-3-1000 + TI'),
            'category_id' => '11',
          ],
          [
            'name' => 'RE 56-2-1000',
            'slug' => Transliterate::slugify('RE 56-2-1000'),
            'category_id' => '11',
          ],
        ];

        foreach($groups as $group){
          Group::create($group);
        }
    }
}
