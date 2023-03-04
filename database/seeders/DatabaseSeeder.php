<?php

namespace Database\Seeders;

use App\Models\Email;
use App\Models\Person;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Email::factory()->count(15)->create();
    }
}
