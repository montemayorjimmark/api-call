<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ListJobs;

class ListJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ListJobs::factory(10)->create();
    }
}