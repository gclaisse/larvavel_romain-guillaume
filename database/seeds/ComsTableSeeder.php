<?php

use Illuminate\Database\Seeder;

class ComsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Com::class, 10)->create();
    }
}
