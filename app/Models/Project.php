<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'link',
        'date',
    ];

    public function attachments(){
        return $this->hasMany(Attachment::class);
    }

    public function thumb(){
        return $this->attachments()->where('thumb',true)->first();
    }
}
