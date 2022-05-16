<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attachment>
 */
class AttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'url' => $this->faker->imageUrl(733, 400, 'Project Picture', true),
            'original' => $this->faker->imageUrl(1024, 1024, 'Project Picture', true),
            'project_id' => null,
            'thumb' => false,
        ];
    }

    public function withNewProject()
    {
        return $this->state(function (array $attributes) {
            return [
                'project_id' => Project::factory(),
            ];
        });
    }

    public function thumb()
    {
        return $this->state(function (array $attributes) {
            return [
                'thumb' => true,
                'url' => $this->faker->imageUrl(733, 400, 'Project Thumbnail', true),
                'original' => $this->faker->imageUrl(1024, 1024, 'Project Thumbnail', true),
            ];
        });
    }
}
