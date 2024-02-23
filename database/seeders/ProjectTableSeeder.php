<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Technology;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project :: factory()
        -> count(10)
        -> create()
        -> each(function($project){
            $technologies = Technology :: inRandomOrder() -> limit(3) -> get();
        });
    }
}
