<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'title_1',
        'image_1',
        'title_2',
        'image_2',
        'title_3',
        'image_3',
        'title_4',
        'image_4',
    ];

    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        $value = $this->{$field};
        if (is_string($value) && $this->isJson($value)) {
            $arr = json_decode($value, true);
            return $arr[$locale] ?? ($arr['tr'] ?? reset($arr));
        }
        return $value;
    }

    private function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
