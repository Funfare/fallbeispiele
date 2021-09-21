<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CaseStudy;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CaseStudy::factory()->count(10)->create();

        CaseStudy::factory()
        ->count(10)
        ->for(User::find(1))
        ->create();

    }
}
