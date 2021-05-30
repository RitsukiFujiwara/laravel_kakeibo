<?php

namespace Database\Seeders;
use App\Models\MoneyInfo;
use Illuminate\Database\Seeder;

class MoneyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MoneyInfo::factory()->count(10)->create();
    }
}
