<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class Tour extends Model
{
    protected $table = 'tours';
    use SoftDeletes;

    public static function getAll($limit = null, $offset = null)
    {
        if (!is_null($limit) && !is_null($offset))
            return self::limit($limit)->offset($offset)->get();
        elseif (!is_null($limit) && is_null($offset))
            return self::limit($limit)->get();
        else
            return self::all();
    }
}
