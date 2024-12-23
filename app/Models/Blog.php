<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'description'];
    protected $guarded = ['id'];


    public function category() {
        return $this->belongsTo(Category::class);
    }
}
