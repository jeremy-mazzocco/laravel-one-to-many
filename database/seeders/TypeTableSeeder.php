<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = Type::factory()->count(25)->make();

        foreach ($types as $type) {

            $project = Project::inRandomOrder()->first();

            $type->user_id = $project->id;
            $project->save();
        }
    }
}
