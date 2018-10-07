<?php

namespace Amitav\Variables\Models;

use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    protected $guarded = [];

    protected $casts = [
        'value' => 'array',
    ];
}
