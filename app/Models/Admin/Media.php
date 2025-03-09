<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    protected $guarded = [];
    protected $table = 'media';


    // In Media model
    public function tutorial()
    {
        return $this->belongsTo(Tutorial::class, 'id');
    }
}
