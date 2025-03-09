<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProLang extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description'
    ];

    protected $dates  = ['deleted_at'];
    protected $table = 'pro_langs';
}
