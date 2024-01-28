<?php

use App\Models\PageField;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageField::truncate();

        PageField::create([
            'key' => 'about',
            'title' => 'About the Company',
            'description' => '<span>Technics and Technology Company - </span>is a team of highly qualified specialists in the field of providing production with necessary components.',
            'head_image' => 'img/about/about-main.png',
            'partner_title' => 'Reliable partner',
            'partner_title_description' => 'Production with a reliable supplier of components is not difficult.',
            'features_content' => [
                'We guarantee 100% quality of supplied components;',
                'Prices are among the lowest in the market;',
                'We offer flexible payment terms taking into account the specifics of realization of our customers products (work without prepayment, deferred payment);',
                'We offer convenient terms of delivery (support of products in stock according to the production plan and in some cases storage of more than quarterly demand, especially in industries with poorly predictable sales, when a tender can be won and there is not enough time for kitting);',
                'Thanks to many years of work and direct links with the represented manufacturers, we provide high-quality technical support (coordination of technical specifications, assistance in selecting a product from the standard product line or with modifications);',
                'We offer a convenient logistics service',
            ],
            'quote_title' => 'We realize that delivery time for production is one of the most important parameters, so we pay special attention to it.',
            'years_title' => 'The company was founded in 1994',
            'years_1' => [
                'title' => '1998 year',
                'description' => 'the company owns a factory that produces civilian products.'
            ],
            'years_2' => [
                'title' => '1999 year',
                'description' => 'Second Supplier certificate was obtained for domestic and imported electronic components, which is annually renewed'
            ],
            'years_3' => [
                'title' => '2012 year',
                'description' => 'solving customer-specific tasks and meeting logistical needs with products that meet international quality standards.'
            ],
            'blocks_1' => [
                'title' => 'Supply of low-power electric motors, control systems and equipment based on them',
                'description' => 'We start supplying components for electricity meters, such as: counting mechanisms, shunts, LCD displays, current and voltage transformers. For the production of water, heat and gas meters, in addition to the above products, we offer integrators, impellers, magnets, reed switches and sensors based on them, as well as plastic and metal structural elements.'
            ],
            'blocks_2' => [
                'title' => 'Supply of components for metering devices',
                'description' => 'Second Supplier certificate for domestic and imported electronic components was obtained, which is renewed annually.'
            ],
            'blocks_3' => [
                'title' => 'Supply of ceramic insulators',
                'description' => 'We start supplying ceramic insulators for high-voltage contactors and power lines. In addition to standard solutions, we offer special designs according to customer specifications.'
            ]
        ]);

        PageField::create([
            'key' => 'contact',
            'title' => 'Contact us',
            'address' => '<p>Street:  21 Kent Street</p>
                <p>City:  Cronton <br></p>
                <p><span>Zip code:  WA8 3JS</span></p>
                <p>Country:  United Kingdom</p>',
            'phone' => '+44 1632 960953',
            'email' => 'last2828@gmail.com',
        ]);

        PageField::create([
            'key' => 'home',
            'meta_title' => 'Home page',
            'meta_keywords' => 'Home page',
            'meta_description' => 'Home page',
            'title' => 'Main'
        ]);

        PageField::create([
            'key' => 'dunkermotoren',
            'meta_title' => 'Dunkermotoren page',
            'meta_keywords' => 'Dunkermotoren page',
            'meta_description' => 'Dunkermotoren page',
            'title' => 'Dunkermotoren'
        ]);
        PageField::create([
            'key' => 'jianghai',
            'meta_title' => 'Jianghai page',
            'meta_keywords' => 'Jianghai page',
            'meta_description' => 'Jianghai page',
            'title' => 'Jianghai'
        ]);
    }
}
