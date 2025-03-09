<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    //
    protected $guarded = [];

    public function proLang()
    {
        return $this->belongsTo(Prolang::class, 'prolangs_id');

    }

    public function media()
    {
        return $this->hasMany(Media::class, 'tutorial_id');
    }
}
