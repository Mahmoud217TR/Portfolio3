<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Project::factory(10)->has(Attachment::factory(3))->has(Attachment::factory()->thumb())->create()->each(function ($project){
            $this->command->info("Created a Project with the ID: (".$project->id.")");
        });

        User::factory()->admin()->create([
            'email' => 'admin@users.test'
        ]);
    }
}
