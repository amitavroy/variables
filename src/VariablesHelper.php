<?php

namespace Amitav\Variables;

use Amitav\Variables\Models\Variable;

class VariablesHelper
{
    public static function get($key)
    {
        return Variable::where('key', $key)->pluck('value')->first();
    }

    public static function set($key, $value)
    {
        if (Variable::where('key', $key)->count() != 0) {
            $variable = Variable::where('key', $key)->first();
            $variable->value = $value;
            $variable->save();
            return $variable;
        }

        return Variable::create([
            'key' => $key,
            'value' => $value,
        ]);
    }
}
