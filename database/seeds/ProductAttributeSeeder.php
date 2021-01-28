<?php


use App\Models\Catalog\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttribute::truncate();

        $attributesBrushlessDC = [
          [
            'name' => 'Nominal voltage',
            'units' => 'V',
          ],
          [
            'name' => 'Nominal current',
            'units' => 'A',
          ],
          [
            'name' => 'Nominal torque',
            'units' => 'Ncm',
          ],
          [
            'name' => 'Nominal speed',
            'units' => 'rpm',
          ],
          [
            'name' => 'Friction torque at no load',
            'units' => 'Ncm',
          ],
          [
            'name' => 'Peak stall torque',
            'units' => 'Ncm',
          ],
          [
            'name' => 'Maximum torque',
            'units' => 'Ncm',
          ],
          [
            'name' => 'No load speed',
            'units' => 'rpm',
          ],
          [
            'name' => 'Maximum output power',
            'units' => 'W',
          ],
          [
            'name' => 'Nominal power',
            'units' => 'W',
          ],
          [
            'name' => 'Torque constant',
            'units' => 'Ncm/A',
          ],
          [
            'name' => 'Terminal resistance',
            'units' => 'Ohm',
          ],
          [
            'name' => 'Terminal inductance',
            'units' => 'mH',
          ],
          [
            'name' => 'Rotor inertia',
            'units' => 'gcm^2',
          ],
          [
            'name' => 'Weight',
            'units' => 'kg',
          ],
        ];

        foreach($attributesBrushlessDC as $attribute)
        {
          ProductAttribute::create($attribute);
        }

    }
}
