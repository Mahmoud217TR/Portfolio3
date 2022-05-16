<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isNull;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'original',
        'project_id',
        'thumb',
    ];

    protected $attributes = [
        'thumb' => false,
    ]; 

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function makeThumb(){
        if ($this->project->thumb()){
            $this->project->thumb()->update(['thumb'=>false]);
        }
        $this->update(['thumb'=>true]);
        return $this->project->thumb();
    }
}
