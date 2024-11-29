<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample deliveries data
        DB::table('deliveries')->insert([
            [
                'rider_id' => 1,  // Replace with the actual rider ID
                'delivery_status' => 'pending',
                'delivery_details' => 'Delivering documents to office.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rider_id' => 1,  // Replace with the actual rider ID
                'delivery_status' => 'completed',
                'delivery_details' => 'Delivered groceries to home address.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rider_id' => 2,  // Replace with the actual rider ID
                'delivery_status' => 'completed',
                'delivery_details' => 'Delivered food order to restaurant.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
