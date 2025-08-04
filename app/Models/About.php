<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'title_2',
        'description',
        'description_2',
        'btn_text',
        'image',
    ];

    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        $value = $this->{$field};
        if (is_array($value)) {
            return $value[$locale] ?? $value[array_key_first($value)] ?? '';
        }
        if (is_string($value) && $this->isJson($value)) {
            $arr = json_decode($value, true);
            return $arr[$locale] ?? $arr[array_key_first($arr)] ?? '';
        }
        return $value;
    }

    protected function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
