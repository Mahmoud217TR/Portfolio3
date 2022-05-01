<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory(10)->hasAttachments(3)->has(Attachment::factory()->thumb())->create();
    }
}
