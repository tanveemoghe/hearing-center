<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'hearing pro 1001',
            'price' => 10.5,
            'tax' => 5    
            ],
            ['name' => 'hearing pro 2002',
            'price' => 200,
            'tax' => 10    
            ],
            ['name' => 'hearing pro 3003',
            'price' => 10.5,
            'tax' => 2    
            ],
            ['name' => 'hearing pro 4004',
            'price' => 30,
            'tax' => 10    
            ],
            ['name' => 'hearing pro 5005',
            'price' => 20,
            'tax' => 5    
            ]
        ]);
    }
}
