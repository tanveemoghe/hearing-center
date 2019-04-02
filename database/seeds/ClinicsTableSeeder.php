<?php

use Illuminate\Database\Seeder;

class ClinicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinics')->insert([
            ['location' => 'Vancouver',
            'created_at' => '2016-01-04',
            ],
            ['location' => 'Calgary',
            'created_at' => '2016-01-04',
            ],
            ['location' => 'Toronto',
            'created_at' => '2016-01-04',
            ]
        ]);
    }
}
