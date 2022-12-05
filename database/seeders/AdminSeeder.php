<?php

namespace Database\Seeders;

use App\Http\Controllers\HomeController;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(HomeController $controller)
    {
        $controller->seed();
    }
}
