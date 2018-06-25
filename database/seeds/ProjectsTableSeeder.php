<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = \App\Project::create([
            'name' => 'The Companye Name 3',
            'description' => 'Coluptates distinctio aperiam eligendi blanditiis placeat tempora eum ad asperiores maxime quod soluta aliquid.',
        ]);

        $project->save();
    }
}
