<?php

use Illuminate\Database\Seeder;

class WorkshopTableSeeder extends Seeder
{
    /**
     * Run the workshop seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Workshop::class, 10)->create();
    }
}
