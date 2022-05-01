<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'project_id',
        'thumb',
    ];

    protected $attributes = [
        'thumb' => false,
    ]; 

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
