<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Online Consultations',
                'description' => 'Consult with doctors remotely for medical advice and prescriptions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Prescription Refills',
                'description' => 'Refill your prescriptions conveniently through our platform.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
