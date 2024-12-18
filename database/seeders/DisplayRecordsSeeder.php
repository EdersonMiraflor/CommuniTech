<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DisplayRecords;

class DisplayRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DisplayRecords::create(['name' => 'Alice', 'email' => 'alice@example.com', 'category' => '1']);
        DisplayRecords::create(['name' => 'Bob', 'email' => 'bob@example.com', 'category' => '2']);
        DisplayRecords::create(['name' => 'Carol', 'email' => 'carol@example.com', 'category' => '3']);
    }
}
